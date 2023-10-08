<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ config('apps.user.title') }}</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li class="active">
                <strong>{{ config('apps.user.title') }}</strong>
            </li>
        </ol>
    </div>
</div>
<div class="row mt20">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{ config('apps.user.tableHeading') }}</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" value="" id="checkAll" class="input-checkbox" />
                            </th>
                            <th style="width: 90px">Ảnh</th>
                            <th>Thông tin thành viên</th>
                            <th>Địa chỉ</th>
                            <th>Trình trạng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="checkbox" value="" class="input-checkbox checkBoxItem" />
                            </td>
                            <td>
                                <span class="image img-cover"><img src="https://media.licdn.com/dms/image/D560BAQE96KctT7x-iw/company-logo_200_200/0/1666170056007?e=2147483647&v=beta&t=U-5DmL_mYQaduEYyl0aVlabEvxP6-F5nZE9daao6Wuk" alt=""></span>
                            </td>
                            <td>
                                <div class="info-item name"><strong>Họ tên:</strong> Expace</div>
                                <div class="info-item email"><strong>Email:</strong> expace@gmail.com</div>
                                <div class="info-item phone"><strong>Phone:</strong> 0971772233</div>
                            </td>
                            <td>
                                <div class="address-item name"><strong>Địa chỉ:</strong> 16 Ngõ 177 Đường Trần Duy Hưng</div>
                                <div class="address-item email"><strong>Phường (Xã):</strong> Mai Dịch</div>
                                <div class="address-item phone"><strong>Quận:</strong> Cầu Giấy</div>
                                <div class="address-item phone"><strong>Thành phố:</strong> Hà Nội</div>
                            </td>
                            <td>
                                <input type="checkbox" class="js-switch" checked />
                            </td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        let elem = document.querySelector('.js-switch');
        let switchery = new Switchery(elem, { color: '#1AB394' });
    })
</script>
