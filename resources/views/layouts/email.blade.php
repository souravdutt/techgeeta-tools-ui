<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? 'TechGeeta' }}</title>
    <style>
        /* Email-safe CSS */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .email-header p {
            margin: 8px 0 0 0;
            opacity: 0.9;
            font-size: 16px;
        }
        .email-body {
            padding: 30px 20px;
        }
        .email-footer {
            background-color: #f8fafc;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }
        .email-footer p {
            margin: 0;
            font-size: 14px;
            color: #6b7280;
        }
        .button {
            display: inline-block;
            background-color: #3b82f6;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            margin: 20px 0;
        }
        .button:hover {
            background-color: #2563eb;
        }
        .highlight-box {
            background-color: #f0f9ff;
            border: 1px solid #e0f2fe;
            border-radius: 6px;
            padding: 20px;
            margin: 20px 0;
        }
        .cost-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #f3f4f6;
        }
        .cost-item:last-child {
            border-bottom: none;
            font-weight: 600;
            font-size: 18px;
        }
        @media only screen and (max-width: 600px) {
            .email-container {
                margin: 0;
                border-radius: 0;
            }
            .email-header, .email-body, .email-footer {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>{{ $header_title ?? 'TechGeeta' }}</h1>
            <p>{{ $header_subtitle ?? 'Expert MVP Development & Startup Technology Solutions' }}</p>
        </div>

        <div class="email-body">
            @yield('content')
        </div>

        <div class="email-footer">
            <p><strong>TechGeeta</strong> - Expert MVP Development & Startup Technology Solutions</p>
            <p>Contact us: <a href="mailto:{{ config('mail.from.address', 'hello@techgeeta.com') }}">{{ config('mail.from.address', 'hello@techgeeta.com') }}</a> | <a href="https://techgeeta.com">www.techgeeta.com</a></p>
            <p style="margin-top: 15px; font-size: 12px;">
                This email was sent because you requested a budget estimate from our Startup Budget Estimator tool.
            </p>
        </div>
    </div>
</body>
</html>
