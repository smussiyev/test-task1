<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test-Task</title>
    <style>
        body {
            font-family: Roboto, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .test-container {
            max-width: 1296px;
            max-height: 625px;
            background: blue;
            border-radius: 12px;
            padding: 80px 100px 100px 80px;

        }

        .test-section {
            display: flex;
            justify-content: space-between;
        }

        .test-section-left {
            width: 665px;
            max-height: 465px;
            margin-right: 50px;
            color: white;
        }

        .test-title {
            margin: 0;
            margin-bottom: 15px;
            font-size: 50px;
            font-weight: 700;
            line-height: 65px;
        }

        .test-text {
            margin: 0;
            margin-bottom: 45px;
            font-size: 30px;
            font-weight: 700;
            line-height: 39px;
        }

        .test-text-items {
            margin-bottom: 97px;
        }

        .test-text-item {
            margin: 0;
            display: flex;
            align-items: center;
            gap: 25px;
            font-size: 24px;
            font-weight: 500;
            line-height: 28.8px;
        }

        .test-text-item:not(:last-child) {
            margin-bottom: 40px;
        }

        .test-image {
            width: 60px;
            height: 43.56px;
        }

        .text-span {
            margin-bottom: 30px;
            font-size: 20px;
            font-weight: 400;
            line-height: 26px;
        }

        .btn-test {
            width: 316px;
            height: 56px;
            background-color: inherit;
            color: white;
            font-size: 17px;
            line-height: 22.1px;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            border: 2px solid yellow;
        }

        .test-section-right {
            max-width: 436px;
            max-height: 465px;
            padding: 44px;
            background-color: white;
            border-radius: 12px;
        }

        .section-right-title {
            max-width: 348px;
            margin: 0;
            margin-bottom: 50px;
            font-size: 24px;
            line-height: 31.2px;
            font-weight: 700;
            color: black;
            text-align: center;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 24px;
            margin-bottom: 24px;
        }

        .input-form {
            width: 348px;
            height: 56px;
            border-radius: 8px;
            padding: 8px;
            margin-bottom: 24px;
            box-sizing: border-box;
        }

        .input-form-phone {
            margin-bottom: 50px;
        }

        .btn-form-test {
            width: 348px;
            height: 56px;
            color: black;
            font-size: 17px;
            line-height: 22.1px;
            font-weight: 600;
            background: yellow;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container test-container">
        <div class="test-section">
            <div class="test-section-left">
                <h1 class="test-title">
                    ТЕСТОВОЕ ЗАДАНИЕ
                </h1>
                <p class="test-text">
                    ВЫПОЛНИТЕ ВЕРСТКУ КОМПОНЕНТА
                </p>

                <div class="test-text-items">
                    <p class="test-text-item">
                        <img src="{{ asset('images/test-image/group13.png') }}" alt="Картинка" class="test-image">
                        Используйте BEM, React контекст провайдеры, MVVM и CleanArchitecture
                    </p>

                    <p class="test-text-item">
                        <img src="{{ asset('images/test-image/group14.png') }}" alt="Картинка" class="test-image">
                        Flex и Grid системы верстки
                    </p>
                </div>

                <div class="text-span">
                    <span>
                        Будем рады видеть вас в нашей команде :)
                    </span>
                </div>

                <button class="btn-test">
                    Я все выполнил!
                </button>

            </div>

            <div class="test-section-right">
                <h2 class="section-right-title">
                    ТЕСТОВАЯ ФОРМА ДЛЯ ПОДАЧИ ЗАЯВКИ
                </h2>

                <form action="#" method="POST" class="input-group">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control input-form" name="name" placeholder="Имя"
                            value="{{ old('name') }}">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control input-form input-form-phone" name="phone" placeholder="Телефон"
                            value="{{ old('phone') }}">
                        @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-form-test" value="Записаться">
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>