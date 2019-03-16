@extends('layouts.app')

@section('content')
    <div class="accounts-content">
        <auth-block    :content="{{(string) $content[1]}}"></auth-block>
        <vk-auth-block :content="{{(string) $content[0]}}"></vk-auth-block>
        <auth-block    :content="{{(string) $content[2]}}"></auth-block>
    </div>
@endsection