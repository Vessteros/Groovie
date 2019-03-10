@extends('layouts.app_old')

@section('content')
    <div class="accounts-content">
        Вы авторизированы!</br>
        <vk-authorized></vk-authorized>

    <?php
        var_dump($content);
        ?>
    </div>
@endsection