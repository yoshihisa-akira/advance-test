<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <main>
        <?php print_r($contact) ?>
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>内容確認</h2>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--name">
                            <input class="form__input--last-name" type="text" name="last-name" value="サンプル">
                            <input class="form__input--first-name" type="text" name="first-name" value="五郎">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="gender" value="性別">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" value="www@aaasss.com">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">郵便番号</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="post" value="111-1111">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" value="東京都渋谷区千駄ヶ谷1-2-3">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__text-title">
                        <span class="form__label--text">ご意見</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <p class="form__input--opinion">smppppppppppppppppppppppppppppppppppppppppppppppppppppp</p>
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
    </main>
</body>
</html>