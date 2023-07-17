@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@section('content')
<div class="thanks">
    <div class="thanks__ttl">
        <p class="thanks__text">ご意見いただきありがとうございました。</p>
    </div>
    <div class="thanks__button">
        <button type="submit" class="thanks__button--submit">トップページへ</button>
    </div>
</div>
@endsection
