<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PDF Document' }}</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            margin: 0;
            padding: 20px;
            background-color: #ffffff;
        }
        .pdf-container {
            max-width: 800px;
            margin: 0 auto;
        }
        .pdf-header {
            text-align: center;
            border-bottom: 3px solid #3b82f6;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .pdf-header h1 {
            margin: 0;
            font-size: 28px;
            color: #1f2937;
            font-weight: 700;
        }
        .pdf-header p {
            margin: 10px 0 0 0;
            color: #6b7280;
            font-size: 16px;
        }
        .section {
            margin-bottom: 30px;
        }
        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 15px;
            border-left: 4px solid #3b82f6;
            padding-left: 15px;
        }
        .highlight-box {
            background-color: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
            margin: 15px 0;
        }
        .cost-breakdown {
            background-color: #f0f9ff;
            border: 1px solid #bae6fd;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .cost-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #e5e7eb;
        }
        .cost-item:last-child {
            border-bottom: 2px solid #3b82f6;
            font-weight: 700;
            font-size: 18px;
            margin-top: 10px;
            padding-top: 15px;
        }
        .feature-list {
            list-style: none;
            padding-left: 0;
        }
        .feature-list li {
            padding: 5px 0;
            padding-left: 20px;
            position: relative;
        }
        .feature-list li:before {
            content: "•";
            color: #3b82f6;
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        .tip-box {
            background-color: #ecfdf5;
            border: 1px solid #bbf7d0;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .tip-box h4 {
            margin: 0 0 10px 0;
            color: #065f46;
            font-size: 16px;
        }
        .footer {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 2px solid #e5e7eb;
            text-align: center;
            color: #6b7280;
            font-size: 14px;
        }
        .grid {
            display: flex;
            gap: 20px;
            margin: 20px 0;
        }
        .grid-item {
            flex: 1;
            text-align: center;
            padding: 15px;
            background-color: #f8fafc;
            border-radius: 6px;
        }
        .grid-item h3 {
            margin: 0 0 5px 0;
            font-size: 24px;
            color: #3b82f6;
        }
        .grid-item p {
            margin: 0;
            color: #6b7280;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="pdf-container">
        <div class="pdf-header">
            <h1>{{ $header_title ?? 'Document Title' }}</h1>
            <p>{{ $header_subtitle ?? 'Generated on ' . now()->format('F j, Y') }}</p>
        </div>

        @yield('content')

        <div class="footer">
            <p><strong>TechGeeta</strong> - Expert MVP Development & Startup Technology Solutions</p>
            <p>Contact: {{ config('mail.from.address', 'hello@techgeeta.com') }} | www.techgeeta.com</p>
            <p>Generated on {{ now()->format('F j, Y \a\t g:i A') }}</p>
        </div>
    </div>
</body>
</html>
