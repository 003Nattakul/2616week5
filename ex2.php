<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


</body>
</html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: "Kanit", serif;
            font-weight: 300;
            font-style: normal;
            margin-left: 100px;
            margin-bottom: 300px;
            margin-top: 80px;
            margin-right: 80px;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใช้งาน Bootstrap</title>
</head>
<body>
    <h1>โปรแกรมบันทึกข้อมูลแมว</h1>

    <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">รหัสประจำตัว</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">ชื่อ</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">สายพันธุ์</label>
    <input type="text" class="form-control" id="inputAddress" >
  </div>
  <div class="col-3">
    <label for="inputAddress2" class="form-label">เพศ</label>
    <select id="inputState" class="form-select">
      <option selected>เลือกเพศ</option>
      <option>เพศผู้</option>
      <option>เพศเมีย</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputCity" class="form-label">วันเกิด</label> 
    <input type="text" class="form-control" id="inputCity" placeholder="xx/xx/xxxx">
  </div>
  <div class="col-3">
    <label for="inputAddress" class="form-label">น้ำหนัก</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="(กิโลกรัม)">
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label">สีขน</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label">หมายเลขชิป</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label">วันที่ฉีดวัคซีนล่าสุด</label>
    <input type="text" class="form-control" id="inputZip" placeholder="xx/xx/xxxx">
  </div>
  <div class="col-md-6">
    <label for="inputZip" class="form-label">หมายเลขโทรศัพท์สัตวแพทย์</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-6">
    <label for="inputZip" class="form-label">หมายเหตุเพิ่มเติม</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">อัพโหลดรูปภาพแมว</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">รายละเอียดเพิ่มเติม</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    <button type="reset" class="btn btn-danger">ยกเลิกการบันทึก</button>
  </div>
</form>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>