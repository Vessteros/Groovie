<?php

namespace App\Exceptions;

use App\App\ApiModels\DataModels\Responses\Failure\BaseProblem;
use App\App\ApiModels\DataModels\Responses\Response;
use App\Exceptions\AppExceptions\Api\ApiException;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception $exception
     *
     * @return void
     * @throws Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception               $exception
     *
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        $customException = $this->customExceptionRender($exception);

        return is_null($customException)
            ? parent::render($request, $exception)
            : $customException;
    }

    /**
     * @param Exception $exception
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response|null
     */
    private function customExceptionRender(Exception $exception)
    {
        $return = null;

        switch (true) {
            case $exception instanceof ApiException:
                $response = new Response;
                $problem = new BaseProblem;

                $response->code = $exception->getCode();
                $response->status = 'failure';
                $response->problem = $problem;

                $problem->line = $exception->getLine();
                $problem->message = $exception->getMessage();
                $problem->file = $exception->getFile();

                $return = Response($response, 200);
                break;

            case $exception instanceof NotFoundHttpException:
                $response = new Response;
                $problem = new BaseProblem;

                $response->code = 404;
                $response->status = 'error';
                $response->problem = $problem;

                $problem->message = 'Страница не найдена';

                $return = Response($response, 404);
                break;

            // case $exception instanceof Exception:
            //     $response = new Response;
            //     $problem = new BaseProblem;
            //
            //     $response->code = $exception->getCode();
            //     $response->status = 'error';
            //     $response->problem = $problem;
            //
            //     $problem->message = $exception->getMessage();
            //
            //     $return = Response($response, $exception->getCode());
            //     break;
        }

        return $return;
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request                 $request
     * @param  \Illuminate\Auth\AuthenticationException $exception
     *
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('login'));
    }
}
