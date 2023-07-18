# advance-test

#アプリケーション名
COACHTECHの基礎学習終了後テスト

##アプリケーションURL
localhost/ (お問い合わせページのURL)
localhost/find (管理システムのURL)

##機能一覧
お問い合わせページについて
laravelの既存validationを使用しました。
確認を押す前に入力した段階でエラーを出すように出来ませんでした
確認を押しても必須項目が入力なしの場合エラーを出すようにしました。
性別は男性をデフォルトにしています。
郵便番号は全角の場合の自動半角化は実装できませんでした。
郵便番号を打つと住所に反映される機能を実装できませんでした。
ご意見は入力文字数が120文字以内になるように制限しました。
確認ボタンを押すと内容確認ページに遷移します。

内容確認ページについて
修正するというリンクを押すとお問い合わせページに戻すようにしました。
その際の入力データの保存機能は実装出来ませんでした。
送信ボタンを押すとサンクスページに遷移します。

お問い合わせ内容はcontactsテーブルに保存します。
contactsテーブル
id:bigint unsigned PRIMARY KEY
fullName:varchar(255) NOT NULL
gender:tinyint NOT NULL(1:男性 2:女性)
email:varchar(255)NOT NULL
postcode:char(8) NOT NULL
address:varchar(255)NOT NULL
building_name:varchar(255)
opinion:text NOT NULL
created_at:timestamp
updated_at:timestamp

