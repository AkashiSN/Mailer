# Mailer

メール一斉送信ツール

## Description

画面経由とYamlから宛先アドレスを読み込み同一のメールを送信します。

## Requirement

- PHP 5.6 or 7.0
- sendgrid-php ~5.2

## Usage

__まだYamlの実装はできていません__

宛先は、Yamlファイルをアップロードするか、直接アドレスを入力します。

対応するYamlの形式を以下に示します。Toに複数値を指定するとそれぞれのアドレスに個別のメールが送信されます。

```yaml
To:
 names: "名前の配列"
 emails: "名前に対応したメールアドレスの配列"
From:
 names: "名前"
 emails: "メールアドレス"
Subject: "メールの件名"
Body:
 type: "text/plainやtext/htmlなど"
 value: "本文"
```

例：

```yaml
To:
 names: ["Smith", "Shelton", "Kelly"]
 emails: ["smith@mail.com", "shelton@mail.com", "kelly@mail.com"]
From:
 names: "John"
 emails: "John@mail.com"
Subject: "Test Mail"
Body:
 type: "text/plain"
 value: "TEST!"
```

## URL

 <https://cb-mailer.herokuapp.com/>

## Installation

    $ git clone https://github.com/AkashiSN/Mailer
    $ cd Mailer
    $ php -S localhost:8080

## Update

### 2017/03/02
- 画面経由で単一のアドレスにメールを送信機能追加

### 2017/03/03
- 画面経由で複数のアドレスに一斉メールを送信機能追加
