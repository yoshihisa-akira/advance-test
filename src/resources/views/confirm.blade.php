@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
<?php print_r($contact) ?>
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
                    <input class="form__input--last-name" type="text" name="fullName" value="{{ $contact['fullName'] }}" readonly>
                    <input class="form__input--first-name" type="text" name="fullName" value="" readonly>
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
                    <input type="text" name="postcode" value="{{ $contact ['postcode'] }}" readonly>
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
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building_name" value="{{ $contact ['building_name'] }}">
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
    </form>
    <form class="form" action="/fix" method="post">
        @csrf
        <div class="form__button--fix">
            <button class="form__button-submit--fix" type="submit">修正する</button>
        </div>
    </form>
</div>
@endsection