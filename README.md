# Mailer

メール一斉送信ツール

## Description

画面経由とYamlから宛先アドレスを読み込み同一のメールを送信します。

## Requirement

- PHP 5.6 or 7.0
- composer
- sendgrid/sendgrid ~5.4.1
- libyaml-devel
- symfony/yaml 3.2.7

## Usage

宛先は、Yamlファイルをアップロードするか、直接アドレスを入力します。

対応するYamlの形式を以下に示します。Toに複数値を指定するとそれぞれのアドレスに個別のメールが送信されます。

`define.php`に`SendGrid`のAPIキーを入力してください

```yaml
To:
 names: "名前の配列"
 emails: "名前に対応したメールアドレスの配列"
From:
 name: "名前"
 email: "メールアドレス"
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
 name: "John"
 email: "John@mail.com"
Subject: "Test Mail"
Body:
 type: "text/plain"
 value: "TEST!"
```


この例では`"Smith", "Shelton", "Kelly"`のそれぞれに

```yaml
From:
 name: "John"
 email: "John@mail.com"
Subject: "Test Mail"
Body:
 type: "text/plain"
 value: "TEST!"
```

のようなメールが送信されます。

## URL

 <https://cb-mailer.herokuapp.com/>

## Installation

    $ git clone https://github.com/AkashiSN/Mailer
    $ cd Mailer
    $ composer update
    $ php -S localhost:8080

## Update

### 2017/03/02
- 画面経由で単一のアドレスにメールを送信機能追加

### 2017/03/03
- 画面経由で複数のアドレスに一斉メールを送信機能追加

### 2017/04/12
- Yamlでの入力機能追加