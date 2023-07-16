@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>内容確認</h2>
    </div>
    <form class="form" action="/contacts" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input class="form__input--last-name" type="text" name="lastName" value="{{ $contact['lastName'] }}" readonly>
                    <input class="form__input--first-name" type="text" name="first-name" value="{{ $contact['firstName'] }}" readonly>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="gender" value="{{ $contact ['gender'] }}" readonly>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" value="{{ $contact ['email'] }}" readonly>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="post" value="{{ $contact ['post'] }}" readonly>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" value="{{ $contact ['address'] }}" readonly>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__text-title">
                <span class="form__label--text">ご意見</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea class="form__input--opinion" name="opinion" cols="28" rows="10" readonly>{{ $contact ['opinion'] }}</textarea>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
        <div class="form__button--fix">
            <button class="form__button-submit--fix" type="submit">修正する</button>
        </div>
    </form>
</div>
@endsection