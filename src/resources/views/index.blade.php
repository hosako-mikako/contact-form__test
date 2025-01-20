@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__heading">
    <h2>Contact</h2>
</div>
<div class="contact-form__content">
    <form class="form" action="/confirm" method="post">
        @csrf
        <!-- 名前　-->
        <div class="form__group">
            <div class="form__group-title">
                <label for="name">お名前 <span class="required">*</span></label>
            </div>
            <div class="form__input--name">
                <input type="text" id="last-name" name="last-name" placeholder="例: 山田" required value="{{ old('last-name') }}">
                <input type="text" id="first-name" name="first-name" placeholder="例: 太郎" required value="{{ old('first-name') }}">
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>

        <!-- 性別 -->
        <div class="form__group">
            <div class="form__group-title">
                <label>性別 <span class="required">*</span></label>
            </div>
            <div class="form__input--gender">
                <label><input type="radio" name="gender" value="男性" required> 男性</label>
                <label><input type="radio" name="gender" value="女性"> 女性</label>
                <label><input type="radio" name="gender" value="その他"> その他</label>
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>

        <!-- メールアドレス -->
        <div class="form__group">
            <div class="form__group-title">
                <label for="email">メールアドレス <span class="required">*</span></label>
            </div>
            <div class="form__input--email">
                <input type="email" id="email" name="email" placeholder="例: test@example.com" required>
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>

        <!-- 電話番号 -->
        <div class="form__group">
            <div class="form__group-title">
                <label for="phone">電話番号 <span class="required">*</span></label>
            </div>
            <div class="form__input--tel">
                <input type="tel" id="phone-1" name="phone-1" maxlength="3" placeholder="080" required>
                <input type="tel" id="phone-2" name="phone-2" maxlength="4" placeholder="1234" required>
                <input type="tel" id="phone-3" name="phone-3" maxlength="4" placeholder="5678" required>
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>

        <!-- 住所 -->
        <div class="form__group">
            <div class="form__group-title">
                <label for="address">住所 <span class="required">*</span></label>
            </div>
            <div class="form__input--address">
                <input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required>
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>

        <!-- 建物名　-->
        <div class="form__group">
            <div class="form__group-title">
                <label for="building">建物名</label>
            </div>
            <div class="form__input--building">
                <input type="text" id="building" name="building" placeholder="例: 千駄ヶ谷マンション101">
            </div>
        </div>

        <!-- お問い合わせの種類 -->
        <div class="form__group">
            <div class="form__group-title">
                <label for="inquiry-type">お問い合わせの種類 <span class="required">*</span></label>
            </div>
            <div class="form__input--inquiry-type">
                <select id="inquiry-type" name="inquiry-type" required>
                    <option value="">選択してください</option>
                    <option value="質問">質問</option>
                    <option value="要望">要望</option>
                    <option value="その他">その他</option>
                </select>
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>

        <!-- お問い合わせ内容 -->
        <div class="form__group">
            <div class="form__group-title">
                <label for="message">お問い合わせ内容 <span class="required">*</span></label>
            </div>
            <div class="form__input--message">
                <textarea id="message" name="message" placeholder="お問い合わせ内容をご記載ください" required></textarea>
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>

        <!-- 確認ボタン -->
        <div class="form__group">
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </div>
    </form>
</div>
@endsection