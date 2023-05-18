<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List_Users</title>
    <link rel="stylesheet" href="/lab2/assets/css/grid.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    body {
        margin-right: 0;
        padding: 0;
        background: linear-gradient(to left, #bdeff1, #dbf2e8);
        background-size: cover;
        width: 100%;
        display: grid;
        height: 100%;
        font-family: monospace;
    }

    h2 {
        text-align: center;
    }

    .table_info {
        display: flex;

        flex-wrap: wrap;
    }

    .Info {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        border: 2px solid;
        border-radius: 5px;
        background: aliceblue;
        width: 70%;
        position: relative;
        margin: 6px auto;
    }

    p {
        margin: 2px 8px;
    }

    .close {
        position: absolute;
        right: -4px;
        top: -6px;
        color: red;
        cursor: pointer;
        font-size: 18px;
    }

    .fix {
        position: absolute;
        left: -6px;
        top: -10px;
        color: #378f6e;
        cursor: pointer;
        font-size: 18px;
    }

    .close:hover::before {
        content: "remove";
        display: block;
        position: absolute;
        top: -17px;
        width: 46px;
        font-size: 12px;

        padding-left: 4px;
        padding-right: 2px;
        height: 17px;
        color: #fff;
        background-color: #417ed9;
        border-radius: 8px;
        bottom: 42px;
        left: -30px;
        animation: fadeIn ease-in 0.2s;
        transition: transform ease-in-out 0.2s;
    }

    .fix:hover::before {
        content: "fix";
        display: block;
        position: absolute;
        top: -17px;
        font-size: 12px;

        width: 30px;
        padding-left: 10px;
        padding-right: 2px;
        height: 17px;
        color: #fff;
        background-color: #417ed9;
        border-radius: 8px;
        bottom: 42px;
        left: -7px;
        animation: fadeIn ease-in 0.2s;
        transition: transform ease-in-out 0.2s;
    }

    form {
        min-width: 260px;
        width: 30%;
        background: #9db6dc;
        border-radius: 4px;
        margin: auto;
        position: relative;
        display: flex;
        flex-direction: column;
        z-index: 10;

    }

    label {
        margin-bottom: 5px;
        margin-left: 10px;
    }

    button {
        width: 40%;
        margin: 4px auto;
        border-radius: 4px;
        cursor: pointer;

    }

    input {
        width: 90%;
        outline: none;
        margin: auto;
    }

    .optionForm {
        position: fixed;
        display: flex;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(122, 96, 97, 0.3);
    }
    </style>
</head>

<body>
    <h2>Thông tin người dùng</h2>
    <!-- sử dụng vòng lặp để lặp qua tất cả các trường trong db -->
    <div class="table_info">
        <?php foreach ($users as $user) : ?>

        <div class="Info" row>
            <p>id: <?=$user['id']?> </p>
            <p>verify_code: <?= $user['verify_code'] ?></p>
            <p>fullname: <?= $user['fullname'] ?></p>
            <p>licence_code: <?= $user['licence_code'] ?></p>
            <p>end_date: <?= $user['end_date'] ?></p>
            <p>phone: <?= $user['phone'] ?></p>
            <p>email: <?= $user['email'] ?></p>
            <p>rank: <?= $user['rank'] ?></p>
            <p>url_img: <?= $user['url_img'] ?></p>
            <p>vehicle: <?= $user['vehicle'] ?></p>
            <div class="close" id=" <?=$user['id']?>">
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
            <div class="fix">
                <i class="fa-solid fa-hammer"></i>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <script>
    const listRemove = document.querySelectorAll(".close");

    //remove item
    for (let item of listRemove) {
        item.onclick = function(e) {
            const Itemparent = e.target.parentNode.parentNode;
            Itemparent.remove(); // remove trong broser
            let id = this.getAttribute("id");
            $(document).ready(function() {
                // dùng ajax để gửi id qua serve cho action deleteDB
                let idview = id
                $.ajax({
                    url: "/deleteDB",
                    type: 'POST',
                    data: {
                        myid: idview
                    },
                    success: function(response) {
                        var result = JSON.parse(response);
                        if (result.status === 'success') {
                            console.log('Xóa dữ liệu thành công!');
                            // Thực hiện các thao tác khác (nếu cần)
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Đã xảy ra lỗi!');
                        // Xử lý lỗi (nếu cần)
                    }
                })
            })
        }
    }
    //fix item
    const listfix = document.querySelectorAll(".fix")
    let valuedbfomr = []
    for (let itemfix of listfix) {
        itemfix.onclick = function(e) {
            e.stopPropagation()
            const listcontent = e.target.parentNode.parentNode;

            // lấy giá trị trong itembd
            const texts = listcontent.querySelectorAll("p")
            for (let text of texts) {
                // lấy giá trị của từng input đưa vô mảng
                let textp = text.textContent
                const [key, value] = textp.split(':')
                let keybd = key.trim()
                // thêm key và value vào obj
                let valueobj = {
                    [keybd]: value.trim(),
                }
                valuedbfomr.push(valueobj)

            }

            //chuyển đôi arr chứa các obj sang obj lớn
            const changarr = valuedbfomr.reduce((result, currentobj) => {
                return Object.assign(result, currentobj)
            }, {})
            let parentfix = document.createElement("div");
            parentfix.setAttribute("class", "optionForm")
            let htmls = `
                <form class="form">
            <label for="confirmation_code">ID:</label>
            <input type="text" id="confirmation_code" name="id" value=${changarr.id} disabled><br>

            <label for="confirmation_code">Mã xác nhận:</label>
            <input type="text" id="confirmation_code" name="verify_code" value=${changarr.verify_code}><br>

            <label for="full_name">Họ và tên:</label>
            <input type="text" id="full_name" name="fullname" value="${changarr.fullname}"><br>

            <label for="license_code">Mã giấy phép:</label>
            <input type="text" id="license_code" name="licence_code" value=${changarr.licence_code}><br>

            <label for="expiration_date">Ngày hết hạn:</label>
            <input type="date" id="end_date" name="end_date" value=${changarr.end_date}><br>

            <label for="phone_number">Số điện thoại:</label>
            <input type="tel" id="phone_number" name="phone" value=${changarr.phone}><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value=${changarr.email}><br>

            <label for="license_class">Hạng bằng lái:</label>
            <input type="text" id="license_class" name="rank" value="${changarr.rank}"><br>

            <label for="image_url">URL hình ảnh:</label>
            <input type="text" id="image_url" name="url_img" value=${changarr.url_img}><br>

            <label for="license_plate">Biển số xe:</label>
            <input type="text" id="license_plate" name="vehicle" value=${changarr.vehicle}><br>

            <button id="sm">Change</button>
        </form>
            `;
            parentfix.innerHTML = htmls;
            document.body.appendChild(parentfix);
            // close form
            const closeform = document.querySelector(".optionForm")
            closeform.onclick = function(e) {
                closeform.remove();
            }

            const formInfodb = closeform.querySelector(".form")
            const smform = closeform.querySelector("#sm")
            formInfodb.addEventListener("submit", function(e) {
                //e.preventDefault();
                const valuelistinput = formInfodb.querySelectorAll("input")
                let valueinputs = []
                // lấy toàn bộ dữ liêu của input sau khi nhấn submit
                for (let iteminput of valuelistinput) {
                    let keyname = iteminput.name
                    console.log(keyname);
                    let valueinputsobj = {
                        [keyname]: iteminput.value,
                    }
                    valueinputs.push(valueinputsobj)
                }

                const changarrvalue = valueinputs.reduce((result, currentobj) => {
                    return Object.assign(result, currentobj)
                }, {})
                console.log(changarrvalue);
                $(document).ready(function() {
                    let valueips = changarrvalue
                    //dùng ajax gửi dữ liệu đi cho updateDB thực hiện
                    $.ajax({
                        url: "/updateDB",
                        type: "POST",
                        data: {
                            myvalueips: valueips
                        },
                        success: function(response) {
                            var result = JSON.parse(response);
                            if (result.status === 'success') {
                                console.log('Update dữ liệu thành công!');
                                // Thực hiện các thao tác khác (nếu cần)
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log('Đã xảy ra lỗi!');
                            // Xử lý lỗi (nếu cần)
                        }
                    })
                })

            })
            formInfodb.addEventListener("click", (e) => {
                e.stopPropagation()
            })
        }
    }
    </script>
</body>

</html>