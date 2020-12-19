<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="/css/cartCSS.css">
</head>

<body>
    <form action="/pages/paymentsuccess" method="post">
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info"><img src="/img/1.jpg">
                            <div>
                                <p>Air Jordan XXXV PF</p>
                                <small>Price:Rp. 2.000.000 </small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><select class="form-control form-control-sm">
                            <option>38</option>
                            <option>39</option>
                            <option>40</option>
                            <option>41</option>
                            <option>42</option>
                            <option>43</option>
                        </select></td>
                    <td><input type="number" value="1"></td>
                    <td>Rp. 2.000.000</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info"><img src="/img/2.jpg">
                            <div>
                                <p>Air Jordan Retro 5</p>
                                <small>Price:Rp. 1.500.000 </small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><select class="form-control form-control-sm">
                            <option>38</option>
                            <option>39</option>
                            <option>40</option>
                            <option>41</option>
                            <option>42</option>
                            <option>43</option>
                        </select></td>
                    <td><input type="number" value="1"></td>
                    <td>Rp. 1.500.000</td>
                </tr>
            </table>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>Rp. 3.500.000</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>Rp. 350.000</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>Rp. 3.850.000</td>
                    </tr>
                    <tr>
                        <td><a href="/pages/paymentsuccess" class="btn btn-light">Checkout</a></td>
                    </tr>

                </table>
            </div>
        </div>
    </form>


</body>
<?= $this->endSection('content'); ?>