



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Payment</title>

<link rel="stylesheet" href="../assets/css/style.css">
<link rel="icon" type="image/png" href="images\icons8-clothes-94.png">
</head>
<body>
    <section class="payment-selection-box">
        <h3>Payment Method</h3>
        
        <!-- Payment Toggle Cards -->
        <div class="method-options">
            <label class="method-card active">
                <input type="radio" name="pay-choice" value="mpesa" checked>
                <div class="method-info">
                    <span class="method-title">M-Pesa Express <small>STK</small></span>
                    <span class="method-desc">push to your phone</span>
                </div>
            </label>
    
            <label class="method-card">
                <input type="radio" name="pay-choice" value="card">
                <div class="method-info">
                    <span class="method-title">Credit/Debit Card</span>
                    <span class="method-desc">Visa or Mastercard</span>
                </div>
            </label>
        </div>
    
        <!-- M-Pesa Input Section -->
        <div id="mpesa-input-area" class="input-detail-group">
            <div class="field-group">
                <label>M-Pesa Phone Number</label>
                <input type="tel" id="checkout-phone" placeholder="07XXXXXXXX">
            </div>
        </div>
    
        <!-- Credit Card Input Section -->
        <div id="card-input-area" class="input-detail-group hidden">
            <div class="field-group">
                <label>Card Number</label>
                <input type="text" placeholder="1234 5678 9101 1121">
            </div>
            
            <!-- Row for Side-by-Side Alignment -->
            <div class="input-row">
                <div class="field-group">
                    <label>Expiry</label>
                    <input type="text" placeholder="MM/YY">
                </div>
                <div class="field-group">
                    <label>CVV</label>
                    <input type="text" placeholder="123">
                </div>
            </div>
        </div>
    
        <button type="button" class="btn-proceed" id="proceed-btn">
            Proceed to Pay
        </button>
    </section>
<script src="../assets/js/script.js"></script>
</body>
</html>