<div class="product_right fixed">
                <div class="title"> <a href="index.php?act=home"> Trang Chủ </a>
                        <i class="fa-solid fa-angles-right"></i> Đăng Nhập
                </div>


                <div class="register">
                        <div class="product_rights">
                                <div class="conts">
                                        <div class="image_user">
                                        </div>
                                        <h4>Quên Mật Khẩu</h4>
                                        <?php
                                    if (isset($_SESSION['username'])) {
                                        extract($_SESSION['username']);
                                    ?>
                                        <h3>
                                                <?= $User ?>
                                        </h3>
                                        <?php
                                    } else {
                                    ?>
                                        <h4>Xin Chào</h4>
                                        <?php }
                                    ?>
                                </div>
                                <form action="index.php?act=forgot" method="post">
                                        <div class="smember_info">

                                                <div class="form-group">
                                                        <div class="group">
                                                                <label>Email</label>
                                                        </div>
                                                        <input class="form-control" type="text" name="email">
                                                </div>
                                                <div class="kt">
                                                        <input type="submit" name="forgot" value=" Gửi">
                                                </div>
                                                <div class="thongbao">
                                                        <h2>
                                                                <?php
                                                if (isset($Thongbao) && ($Thongbao != ""))
                                                    echo $Thongbao;
                                                ?>
                                                        </h2>
                                                </div>

                                        </div>
                                </form>
                        </div>
                </div>

        </div>