<?php
include 'header.php';
?>
<div id="section" style="background-color:#CC0000;">
    <div id="registrationBox">
        <span class="registerDetails">
            <h3 style="text-align:center;">Създаване на нов потребител</h3>
            <hr>
            <form method="post">
                <span>Потребителски детайли</span>
                <input type="text" name="username" id="username" placeholder="Моля въведете потребителско име" required="required" />
                <input type="text" name="firstName" id="firstName" placeholder="Моля въведете бащино име" required="required" />
                <input type="text" name="middleName" id="middleName" placeholder="Моля въведете презиме" required="required" />
                <input type="text" name="lastName" id="lastName" placeholder="Моля въведете фамилия" required="required" />
                <hr>
                <label for="password">Парола</label>
                <input type="password" name="password" id="password" placeholder="Моля въведете парола" required="required" />
                <hr>
                <label for="userType">Избор на роля</label>
                <select name="userType" id="userType" required="required" >
                    <option value="1">Системен архитект</option>
                    <option value="2">Програмист</option>
                    <option value="3">Тестер</option>
                    <option value="4">Мениджър</option>
                    <option value="5">Наблюдател</option>
                </select>
                <hr>
                <?=(isset($succes[0]) ? '<span style="color:green;font-size:16px;text-align:center;display:block;"> ' . $succes[0] . ' </span>' : '') ?>
                <button>Регистрирай</button>
            </form>
        </span>
    </div>
</div>
<?php include 'footer.php'?>