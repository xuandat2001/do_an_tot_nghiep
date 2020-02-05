<template>
     <div class="container">
                <div class="order">
                    <div class=" row">
                        <div class="infor-order col-xl-6 col-md-12 ">
                            <h3 class="order1">đặt hàng</h3>
                            <form aciton="" method="GET">
                                <div class="  name form-group">
                                    <label for="name">họ và tên <span style="color:red">*</span></label>
                                    <input type="text" id="name" placeholder=" " class="form-control">

                                </div>
                                <div class=" form-group ">
                                    <p>giới tính:</p>


                                    <label for="male" class=" gender">
                                        <input type="radio" id="male" name="gender" value="male" checked>male
                                    </label>

                                    <label for="female" class=" gender">
                                        <input type="radio" id="female" name="gender" value="female"> female
                                    </label>
                                    <label for="orther" class=" gender">
                                        <input type="radio" name="gender" id="orther" value="other"> Other

                                    </label>

                                </div>


                                <div class="form-group  email">
                                    <label for="email">email<span style="color:red">*</span></label>
                                    <input type="email" id="email" placeholder="abc@gmail.com" class="form-control">
                                </div>
                                <div class="form-group address">
                                    <label for="address">địa chỉ<span style="color:red">*</span></label>
                                    <input type="text" id="address" class="form-control">
                                </div>
                                <div class="form-group number">
                                    <label for="number">điện thoại<span style="color:red">*</span></label>
                                    <input type="text" id="number" placeholder="" class="form-control">
                                </div>
                                <div class="form-group note">
                                    <p>ghi chú:</p>
                                    <textarea></textarea>
                                </div>

                            </form>
                        </div>


                        <div class="order col-xl-6 col-md-12">
                            <div class="">
                                <div class="order-custor">
                                    <h4 class="order2">đơn hàng của bạn:</h4>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <a href="#"><img src="giao_dien/dat_hang/img/suon.png" width="100%" height="auto"></a>
                                        </div>
                                        <div class="col-xl-8">
                                            <p>lươn nhật sôt</p>
                                            <p>đơn giá:1000 VNĐ </p>
                                            <p>số lượng:1</p>
                                        </div>
                                    </div>
                                    <div class="money">
                                        <p>tổng tiền:</p>
                                        <p>1000VNĐ</p>
                                    </div>
                                </div>
                                <form action="" method="">
                                    <div class="pay">
                                        <h4 class="order3">hình thức thanh toán</h4>
                                        <label for="payment">
                                            <input type="radio" id="payment" name="pay"  checked>thanh toán
                                            khi nhận hàng
                                        </label>
                                        <label for="aripay"><input type="radio" id="aripay" name="pay"
                                                >chuyển khoản</label>
                                    </div>
                                    <div class="order-btn">
                                        <button type="submit" > Mua Ngay</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>