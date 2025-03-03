<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
    <style>
        body {
            font-family: Roboto, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .promo-container {
            max-width: 1296px;
            max-height: 432px;
            background: blue;
            border-radius: 12px;
            padding: 75px 100px 100px 75px;
        }

        .promo-section {
            max-width: 1112px;
            color: white;
        }

        .promo-title {
            margin: 0;
            margin-bottom: 40px;
            font-size: 40px;
            font-weight: 700;
            line-height: 52px;
        }

        .promo-text {
            margin: 0;
            font-size: 20px;
            font-weight: 400;
            line-height: 24px;
            margin-bottom: 80px;
        }

        .input-group {
            display: flex;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 10px;
        }

        .input-form {
            width: 348px;
            height: 56px;
            border-radius: 8px;
            padding: 8px;
            margin-bottom: 40px;
            border: none;
            box-sizing: border-box;
        }

        .btn-action {
            width: 316px;
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
            font-weight: bold;
        }

        .checkbox {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;
            display: flex;
            align-items: center;
        }

        .form-check-input {
            width: 20px;
            height: 20px;
            margin-right: 15px;
        }

    </style>
</head>

<body>
    <div class="container promo-container">
        <div class="promo-section">
            <h1 class="promo-title">ДО КОНЦА АКЦИИ МЕНЬШЕ НЕДЕЛИ!</h1>
            <p class="promo-text">Оформите заявку до X мая и сэкономьте XXXXX тг./мес.</p>

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
                    <input type="tel" class="form-control input-form" name="phone" placeholder="Телефон"
                        value="{{ old('phone') }}">
                    @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-action" value="Получить консультацию">
                </div>
            </form>
            <div class="checkbox">
                <input class="form-check-input" type="checkbox" id="agree" required>
                <label class="form-check-label" for="agree">Я соглашаюсь на обработку персональных данных</label>
            </div>

        </div>

    </div>
</body>

</html>