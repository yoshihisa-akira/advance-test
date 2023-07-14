<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input class="form__input--name" type="text" name="name" maxlength="4">
                            <input class="form__input--name" type="text" name="name">
                        </div>
                    </div>
                </div>
                <div class="form__input-example">
                    <span class="form__input-example--last-name">例）山田</span>
                    <span class="form__input-example--first-name">例）太郎</span>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--radio">
                            <label class="form__radio--item">
                                <input class="form__radio--custom" type="radio" name="gender" value="man" checked>
                                <span class="form__radio--man"></span>
                                <p class="form__radio--man-text">男性</p>
                            </label>
                            <label class="form__radio--item">
                                <input class="form__radio--custom" type="radio" name="gender" value="woman">
                                <span class="form__radio--woman"></span>
                                <p class="form__radio--woman-text">女性</p>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__email-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" class="form__input--email">
                        </div>
                    </div>
                </div>
                <div class="form__input-example">
                    <span class="form__input-example--email">例）test@example.com</span>
                </div>
                <div class="form__group">
                    <div class="form__post-title">
                        <span class="form__label--item">郵便番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <span class="form__input--post-text">〒</span>
                            <input type="text" maxlength="8" class="form__input--post" name="post">
                        </div>
                    </div>
                </div>
                <div class="form__input-example">
                    <span class="form__input-example--post">例）123-4567</span>
                </div>
                <div class="form__group">
                    <div class="form__text-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" class="form__input--address" name="address">
                        </div>
                    </div>
                </div>
                <div class="form__input-example">
                    <span class="form__input-example--address">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                </div>
                <div class="form__group">
                    <div class="form__text-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" class="form__input--building-name" name="building">
                        </div>
                    </div>
                </div>
                <div class="form__input-example">
                    <span class="form__input-example--building-name">例）千駄ヶ谷マンション101</span>
                </div>
                <div class="form__group">
                    <div class="form__text-title">
                        <span class="form__label--text">ご意見</span>
                        <span class="form__label--required-opinion">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="opinion"  cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>