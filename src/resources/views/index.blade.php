@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__heading">
    <h2>Contact</h2>
</div>
<div class="contact-form__content">
    <form class="form" action="/confirm" method="post" novalidate>
        @csrf
        <!-- 名前　-->
        <div class="form__group">
            <div class="form__group-title">
                <label for="name">お名前 <span class="required">
                        ※</span></label>
            </div>
            <div class="form__input--name">
                <input type="text" id="last-name" name="last-name" placeholder="例: 山田" value="{{ old('last-name') }}">
                <input type="text" id="first-name" name="first-name" placeholder="例: 太郎" value="{{ old('first-name') }}">
            </div>
            <div class="form__error">
                @error('first_name')
                <span class="error">{{ $message }}</span>
                @enderror

                @error('last_name')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- 性別 -->
        <div class="form__group">
            <div class="form__group-title">
                <label>性別 <span class="required">※</span></label>
            </div>
            <div class="form__input--gender">
                <label><input type="radio" name="gender" value="1" {{ old('gender','1') == '1' ? 'checked' : '' }}> 男性</label>
                <label><input type="radio" name="gender" value="2" {{ old('gender','1') == '2' ? 'checked' : '' }}> 女性</label>
                <label><input type="radio" name="gender" value="3" {{ old('gender', '1') == '3' ? 'checked' : '' }}> その他</label>
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </div>

        <!-- メールアドレス -->
        <div class="form__group">
            <div class="form__group-title">
                <label for="email">メールアドレス <span class="required">※</span></label>
            </div>
            <div class="form__input--email">
                <input type="email" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>

        <!-- 電話番号 -->
        <div class="form__group">
            <div class="form__group-title">
                <label for="phone">電話番号 <span class="required">※</span></label>
            </div>
            <div class="form__input--tel">
                <input type="tel" id="phone-1" name="phone-1" maxlength="3" placeholder="080">
                <input type="tel" id="phone-2" name="phone-2" maxlength="4" placeholder="1234">
                <input type="tel" id="phone-3" name="phone-3" maxlength="4" placeholder="5678">
            </div>
            <div class="form__error">
                @error('phone-1')
                <span class="error">{{ $message }}</span>
                @enderror

                @error('phone-2')
                <span class="error">{{ $message }}</span>
                @enderror

                @error('phone-3')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- 住所 -->
        <div class="form__group">
            <div class="form__group-title">
                <label for="address">住所 <span class="required">※</span></label>
            </div>
            <div class="form__input--address">
                <input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
            </div>
            <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
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
                <label for="inquiry-type">お問い合わせの種類 <span class="required">※</span></label>
            </div>
            <div class="form__input--detail">
                <select id="detail" name="detail">
                    <option value="">選択してください</option>
                    <option value="質問">質問</option>
                    <option value="要望">要望</option>
                    <option value="その他">その他</option>
                </select>
            </div>
            <div class="form__error">
                @error('detail')
                {{ $message }}
                @enderror
            </div>
        </div>

        <!-- お問い合わせ内容 -->
        <div class="form__group">
            <div class="form__group-title">
                <label for="content">お問い合わせ内容 <span class="required">※</span></label>
            </div>
            <div class="form__input--content">
                <textarea id="content" name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
            <div class="form__error">
                @error('content')
                {{ $message }}
                @enderror
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