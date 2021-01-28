<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <title>Sách Mềm</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="Sách Mềm - Công cụ hỗ trợ giảng dạy, học tập theo chương trình và sách giáo khoa phổ thông." />
        <meta property="og:url" content="https://www.sachmem.vn/users/sign_in" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Sách Mềm - Dạy hay - Học tốt" />
        <meta property="og:description" content="Sách Mềm - phần mềm bổ trợ sách giáo khoa - Hỗ trợ giáo viên giảng bài theo sách tương tác sinh động. - Hỗ trợ học sinh ôn luyện, làm bài tập dễ dàng, thuận tiện" />
        <meta property="og:image" content="https://s.sachmem.vn/public/temp-sm-questions/image/logo_small.png" />
        <meta property="fb:app_id" content="974889472547644" />
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel='dns-prefetch' href='//s.w.org' />
        <link href='https://fonts.gstatic.com' crossorigin='anonymous' rel='preconnect' />
        <link href='https://ajax.googleapis.com' rel='preconnect' />
        <link href='https://fonts.googleapis.com' rel='preconnect' />
        <link rel="alternate" type="application/rss+xml" title="Dòng thông tin Sách Mềm &raquo;" href="https://gioithieu.sachmem.vn/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Sách Mềm &raquo;" href="https://gioithieu.sachmem.vn/comments/feed/" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/abc.css') }}">

    <body>
        <header>
            <nav class="navbar navbar-expand-xl navbar-dark" style="background-color: rgba(108, 122, 252, 1);">
                <!-- <a class="navbar-brand" href="/">
                    <img
                      class="logo"
                      style="width: 62px;"
                      src="https://s.sachmem.vn/public/temp-sm-questions/image/logo_small.png"
                    />
                    </a> -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent1"
                    aria-controls="navbarSupportedContent1"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    >
                <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent1"
                    style="font-size: larger;"
                    >
                    <ul class="navbar-nav ml-auto">
                    @foreach ($categories as $categorys)
                        <li class="nav-item {{ count($categorys->children) ? 'dropdown' :'' }} ">
                            <a
                                class="nav-link  header-text {{ count($categorys->children) ? 'dropdown-toggle' :'' }}"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                {{ count($categorys->children) ? "id='navbarDropdown' " :"" }}
                                >
                                {{ $categorys->c_name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if(count($categorys->children))
                                    @foreach ($categorys->children as $item)
                                        <a class="dropdown-item" href="https://www.sachmem.vn/trial?type=teacher">{{ $item->c_name }}</a>
                                    @endforeach
                                @endif
                            </div>
                        </li>
                        <a class="mx-4 my-2"></a>
                    @endforeach
                        <li class="nav-item">
                            <a
                                class="btn btn-add-sachmem"
                                style="background-color: #169e4f;"
                                id="addSachMem"
                                onclick="window.location.href='https://www.sachmem.vn/pd_keys/new';"
                                >
                            <i class="fa fa-key"></i>
                            Thêm Sách Mềm
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="banner mb-5">
            <div class="container">
                <div class="img mt-4">
                    <div class="row">
                        <div class="col-12 col-sm-5 d-flex justify-content-center">
                            <img
                                src="https://s.sachmem.vn/public/temp-sm-questions/image/logo_banner.svg"
                                class="img-fluid banner-pc"
                                />
                        </div>
                        <div class="col-12 col-sm-7" style="align-self: center;">
                            <div class="banner-pc">
                                <h1
                                    style="
                                    font-family: Linotte-Bold;
                                    color: rgba(255, 255, 255, 1);
                                    "
                                    >
                                    SÁCH TOÁN &#8722; DẠY HAY
                                </h1>
                                <h5
                                    class="mt-2"
                                    style="
                                    color: rgba(255, 255, 255, 1);
                                    font-family: Linotte-Regular;
                                    "
                                    >
                                    Hệ thống phần mềm và học liệu điện tử hỗ trợ giảng dạy, học tập
                                </h5>
                            </div>
                            <div class="container banner-sp">
                                <object
                                    id="svg2"
                                    data="https://s.sachmem.vn/public/temp-sm-questions/image/logo-tieude-mobile.svg"
                                    type="image/svg+xml"
                                    style="width: 100%;"
                                    ></object>
                            </div>
                            <div style="margin-top: 3rem;">
                                <div class="row">
                                    <div class="col-6 col-sm-6 text-center">
                                        <a
                                            class="btn btn-trial"
                                            onclick="window.location.href='https://accounts.sachmem.vn/users/sign_up';"
                                            >
                                        Đăng ký
                                        </a>
                                    </div>
                                    <div class="col-6 col-sm-6 text-center-sp">
                                        <a
                                            class="btn btn-login"
                                            onclick="window.location.href='https://www.sachmem.vn/home';"
                                            >
                                        Đăng nhập
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container">
                <object
                    id="svg2"
                    data="https://s.sachmem.vn/public/temp-sm-questions/image/loiich.svg"
                    type="image/svg+xml"
                    style="width: 100%;"
                    class="mt-4 btn-xemthem-pc"
                    ></object>
                <object
                    id="svg2"
                    data="https://s.sachmem.vn/public/temp-sm-questions/image/loiich-mobile.svg"
                    type="image/svg+xml"
                    style="width: 100%;"
                    class="mt-4 btn-xemthem-sp"
                    ></object>
            </div>
            <hr class="custom-hr-body my-5" />
            <div class="container">
                <object
                    id="svg2"
                    data="https://s.sachmem.vn/public/temp-sm-questions/image/hoclieudientu.svg"
                    type="image/svg+xml"
                    style="width: 100%;"
                    class="mt-4 btn-xemthem-pc"
                    ></object>
                <object
                    id="svg2"
                    data="https://s.sachmem.vn/public/temp-sm-questions/image/hoclieudientu-mobile.svg"
                    type="image/svg+xml"
                    style="width: 100%;"
                    class="mt-4 btn-xemthem-sp"
                    ></object>
            </div>
            <hr class="custom-hr-body my-5" />
            <div class="container">
                <object
                    id="svg1"
                    data="https://s.sachmem.vn/public/temp-sm-questions/image/lophocao.svg"
                    type="image/svg+xml"
                    style="width: 100%;"
                    class="my-4 btn-xemthem-pc"
                    ></object>
                <object
                    id="svg1"
                    data="https://s.sachmem.vn/public/temp-sm-questions/image/lophocao-mobile.svg"
                    type="image/svg+xml"
                    style="width: 100%;"
                    class="mt-4 btn-xemthem-sp"
                    ></object>
            </div>
        </div>

        <div class="container">
            <div class="row my-5">
                <div class="mt-5 col-12 col-md-6">
                    <h3 class="font-title">CẢM NHẬN NGƯỜI DÙNG</h3>
                    <img
                        src="https://s.sachmem.vn/public/temp-sm-questions/image/user_emotions.svg"
                        class="mt-3"
                        style="width: inherit; padding-right: 6rem;"
                        />
                </div>
                <div class="mt-5 col-12 col-md-6">
                    <div class="row">
                        <div class="col-2">
                            <img
                                src="https://s.sachmem.vn/public/temp-sm-questions/image/user_avatar.svg"
                                style="width: inherit;"
                                />
                        </div>
                        <div class="col-10">
                            <h5 class="font-title">Hà Thị Thúy Hằng</h5>
                            <p class="mt-2 font-p">
                                Tôi chưa dạy sách mới, mở thử Sách Mềm ra xem, thấy vô cùng hữu
                                ích cho giáo viên, đặc biệt hỗ trợ nhiều cho việc thiết kế bài
                                giảng. Hết sức cảm ơn sự tận tâm và nỗ lực của các đồng chí...
                            </p>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div>
                        <div class="row">
                            <div class="col-2">
                                <img
                                    src="https://s.sachmem.vn/public/temp-sm-questions/image/user_avatar.svg"
                                    style="width: inherit;"
                                    />
                            </div>
                            <div class="col-10">
                                <h5 class="font-title">Nguyễn Thị Huế</h5>
                                <p class="mt-2 font-p">
                                    Tôi thấy những quyển sách này cực hay. Đúng cái tôi đang cần.
                                    Cảm ơn các thành viên đã làm ra các "siêu phẩm" như thế này...
                                    Cảm ơn các bạn rất nhiều.
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div>
                        <div class="row">
                            <div class="col-2">
                                <img
                                    src="https://s.sachmem.vn/public/temp-sm-questions/image/user_avatar.svg"
                                    style="width: inherit;"
                                    />
                            </div>
                            <div class="col-10">
                                <h5 class="font-title">Trịnh Thị Quyên</h5>
                                <p class="mt-2 font-p">
                                    Tôi rất thích trang web, nó đã giúp cho đội ngũ giáo viên chúng
                                    tôi rất nhiều trong việc soạn giảng,.... cảm ơn các tác giả!!!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col btn-xemthem-pc">
                            <a
                                class="mt-5 btn btn-viewmore text-center font-title"
                                style="background-color: rgba(57, 198, 78, 1);"
                                >
                            Xem thêm
                            </a>
                        </div>
                    </div>
                    <div class="col btn-xemthem-sp" style="text-align: center;">
                        <a
                            class="mt-5 btn btn-viewmore text-center font-title"
                            style="background-color: rgba(57, 198, 78, 1);"
                            >
                        Xem thêm
                        </a>
                    </div>
                </div>
            </div>
            <hr class="custom-hr-body my-5" />
        </div>
        <div class="container font-title">
            <h3 class="text-center">CON SỐ THỐNG KÊ</h3>
            <div class="custom-statistical-box" id="test">
                <ul>
                    <li>
                        <div class="title">Số lượng sách tương tác</div>
                        <p class="number-custom-satistical" id="book">
                            0
                        </p>
                        <p class="text-custom-satistical">
                            Sách
                        </p>
                    </li>
                    <li>
                        <div class="title">Ngân hàng câu hỏi</div>
                        <p class="number-custom-satistical" id="question">
                            0
                        </p>
                        <p class="text-custom-satistical">
                            Câu
                        </p>
                    </li>
                    <li>
                        <div class="title">Số lượt tải đề thi</div>
                        <p class="number-custom-satistical" id="turn">
                            0
                        </p>
                        <p class="text-custom-satistical">
                            Lượt
                        </p>
                    </li>
                    <li>
                        <div class="title">Số lượng giáo viên</div>
                        <p class="number-custom-satistical" id="teacher">
                            0
                        </p>
                        <p class="text-custom-satistical">
                            Giáo viên
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </body>
    <footer class="img-footer responsive">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-6 mt-5">
                    <div>
                        <img
                            src="https://s.sachmem.vn/public/temp-sm-questions/image/icon_gd.png"
                            />
                        <img
                            src="https://s.sachmem.vn/public/temp-sm-questions/image/heid.png"
                            class="ml-3"
                            />
                    </div>
                    <div class="color-text-footer">
                        <div class="mt-3">
                            <span style="font-family: bold;">
                                <p class="font-text-footer">
                                    Nhà xuất bản Giáo dục Việt Nam
                                </p>
                                <p style="font-family: Linotte-Bold; font-size: large;">
                                    Công ty Cổ phần Đầu tư và Phát triển Giáo dục Hà Nội
                                </p>
                                <p></p
                                    >
                            </span>
                            <p class="font-text-footer">
                                <span>Người đại diện:</span> Ông Vũ Bá Khánh &#8722; Tổng Giám đốc
                            </p>
                            <p class="font-text-footer">
                                <span>Địa chỉ:</span> Tòa nhà VP HEID, ngõ 12 Láng Hạ, Thành Công,
                                Ba Đình, Hà Nội
                            </p>
                            <p class="font-text-footer">
                                <span>Điện thoại:</span>
                                <a
                                    href="tel:024%203512.22.22"
                                    class="mr-4"
                                    style="
                                    color: rgba(216, 223, 239, 1);
                                    font-family: Linotte-SemiBold;
                                    "
                                    >(024) 3512 2222</a>
                                <span class="d-inline-block">Email: info@heid.vn</span>
                            </p>
                            <p class="font-text-footer">
                                Giấy CNĐKDN số: 0102222393 do Sở KHĐT TP. Hà Nội cấp ngày
                                20/09/2010.
                            </p>
                            <a href="http://online.gov.vn/Home/WebDetails/41365">
                            <img
                                src="https://s.sachmem.vn/public/temp-sm-questions/image/check_bocongthuong.png"
                                /></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2 mt-5">
                    <h5 class="heading-footer text-white">Liên kết</h5>
                    <p>
                        <a
                            href="https://gioithieu.sachmem.vn/dieu-khoan-dich-vu/"
                            style="
                            color: rgba(216, 223, 239, 1);
                            font-family: Linotte-SemiBold;
                            "
                            >Điều khoản sử dụng</a
                            >
                    </p>
                    <p>
                        <a
                            href="https://gioithieu.sachmem.vn/chinh-sach-rieng-tu/"
                            style="
                            color: rgba(216, 223, 239, 1);
                            font-family: Linotte-SemiBold;
                            "
                            >Chính sách bảo mật</a
                            >
                    </p>
                    <p>
                        <a
                            href="https://gioithieu.sachmem.vn/huongdan/"
                            style="
                            color: rgba(216, 223, 239, 1);
                            font-family: Linotte-SemiBold;
                            "
                            >Hướng dẫn sử dụng</a
                            >
                    </p>
                    <p>
                        <a
                            href="#"
                            style="
                            color: rgba(216, 223, 239, 1);
                            font-family: Linotte-SemiBold;
                            "
                            >Câu hỏi thường gặp</a
                            >
                    </p>
                    <h5 class="heading-footer text-white">Mạng xã hội</h5>
                    <p>
                        <a
                            href="https://www.facebook.com/sachmem.vn"
                            style="
                            color: rgba(216, 223, 239, 1);
                            font-family: Linotte-SemiBold;
                            "
                            >Facebook</a
                            >
                    </p>
                    <p>
                        <a
                            href="https://www.youtube.com/channel/UCGzhS0mRNympJQQ0PStn7CQ"
                            style="
                            color: rgba(216, 223, 239, 1);
                            font-family: Linotte-SemiBold;
                            "
                            >YouTube</a
                            >
                    </p>
                    <p>
                        <a
                            href="#"
                            style="
                            color: rgba(216, 223, 239, 1);
                            font-family: Linotte-SemiBold;
                            "
                            >Diễn đàn</a
                            >
                    </p>
                </div>
                <div class="col-12 col-md-4 mt-5 color-text-footer">
                    <h5 class="heading-footer text-white">Hỗ trợ</h5>
                    <p class="font-text-footer">
                        Điện thoại:
                        <a
                            href="tel:024%203512.22.22"
                            style="
                            color: rgba(216, 223, 239, 1);
                            font-family: Linotte-SemiBold;
                            "
                            >(024) 3512 2222</a
                            >
                    </p>
                    <p class="font-text-footer">
                        (8:00 &#8722; 11:30, 13:30 &#8722; 17:00, Thứ 2 &#8722; 6)
                    </p>
                    <p class="font-text-footer">
                        Nhắn tin:
                        <a
                            style="color: rgba(216, 223, 239, 1);"
                            href="https://m.me/sachmem.vn"
                            >Messenger</a
                            >
                    </p>
                    <p class="font-text-footer">
                        Thư điện tử:
                        <a
                            href="mailto:lienhe@sachmem.vn"
                            style="color: rgba(216, 223, 239, 1);"
                            >lienhe@sachmem.vn</a
                            >
                    </p>
                </div>
            </div>
            <div class="color-text-footer font-text-footer mt-2">
                <div>
                    <h5 class="text-center">
                        Giấy phép thiết lập mạng Xã hội số 405/GP − BTTTT do Bộ Thông tin và
                        Truyền thông cấp ngày 21/08/2017.
                    </h5>
                    <h5 class="text-center">Copyright © 2016 − 2020 SACHMEM.VN</h5>
                </div>
            </div>
        </div>
    </footer>
    <a
        id="button-question-mark"
        class="btn"
        href='https://gioithieu.sachmem.vn/cau-hoi-thuong-gap/' target="_blank"
        >
        <div>
            <img src="https://s.sachmem.vn/public/temp-sm-questions/image/icon_questionmark.png"
                class="btn-question-mark"
                />
        </div>
    </a>
</html>
