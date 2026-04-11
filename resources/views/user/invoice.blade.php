<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
    body {
        font-family: Arial, sans-serif;
        color: #333;
        font-size: 13px;
    }

    .header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background: #f5f5f5;
        padding: 10px;
        text-align: left;
        border-bottom: 2px solid #ddd;
    }

    td {
        padding: 8px 10px;
        border-bottom: 1px solid #eee;
    }

    .text-right {
        text-align: right;
    }

    .totals td {
        border: none;
        padding: 5px 10px;
    }

    .grand-total td {
        font-size: 16px;
        font-weight: bold;
        border-top: 2px solid #ddd;
    }

    .footer {
        text-align: center;
        margin-top: 40px;
        color: #999;
        font-size: 11px;
    }

    .badge {
        background: #28a745;
        color: white;
        padding: 2px 8px;
        border-radius: 10px;
        font-size: 11px;
    }
    </style>
</head>

<body>

    <div class="header">
        <div>
            <h2 style="margin:0;">INVOICE</h2>
            <p style="margin:5px 0;">Order #: <strong>{{ $order->order_number }}</strong></p>
            <p style="margin:5px 0;">Date: {{ $order->created_at->format('d M Y') }}</p>
            <p style="margin:5px 0;">Status: <span class="badge">{{ ucfirst($order->status) }}</span></p>
        </div>


        <div style="text-align:right;">
            <h3 style="margin:0;">{{ $order->shop_name ?? config('app.name') }}</h3>
            <p style="margin:5px 0;">Jhang, Punjab, Pakistan</p>
            <p style="margin:5px 0;">shanusmanfarooq@gmail.com</p>
        </div>
        
    </div>

    <div style="display:flex;justify-content:space-between;margin-bottom:25px;">
        <div>
            <strong>Bill To:</strong><br>
            {{ $order->first_name }} {{ $order->last_name }}<br>
            {{ $order->email }}<br>
            {{ $order->phone }}<br>
            {{ $order->address }}, {{ $order->city }}, {{ $order->country }}
        </div>
        <div style="text-align:right;">
            <strong>Payment:</strong><br>
            {{ $order->payment_method === 'cod' ? 'Cash on Delivery' : 'Card' }}<br><br>
            <strong>Shipping:</strong><br>
            {{ $order->shipping_method === 'express' ? 'Express (1 Day)' : 'Standard (7 Days)' }}
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th style="text-align:center;">Qty</th>
                <th class="text-right">Unit Price</th>
                <th class="text-right">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $i => $item)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $item->product_name }}</td>
                <td style="text-align:center;">{{ $item->quantity }}</td>
                <td class="text-right">PKR {{ number_format($item->price, 2) }}</td>
                <td class="text-right">PKR {{ number_format($item->total, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <table style="width:40%;margin-left:auto;margin-top:20px;" class="totals">
        <tr>
            <td>Subtotal:</td>
            <td class="text-right">PKR {{ number_format($order->subtotal, 2) }}</td>
        </tr>
        <tr>
            <td>Discount:</td>
            <td class="text-right" style="color:green;">- PKR {{ number_format($order->discount, 2) }}</td>
        </tr>
        <tr>
            <td>Delivery:</td>
            <td class="text-right">PKR {{ number_format($order->delivery_charge, 2) }}</td>
        </tr>
        <tr>
            <td>Tax (18%):</td>
            <td class="text-right">PKR {{ number_format($order->tax, 2) }}</td>
        </tr>
        <tr class="grand-total">
            <td><strong>Total:</strong></td>
            <td class="text-right" style="color:#e91e63;"><strong>PKR {{ number_format($order->total, 2) }}</strong>
            </td>
        </tr>
    </table>

    <div class="footer">
        Thank you for your purchase! — shanusmanfarooq@gmail.com
    </div>

</body>

</html>