<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="auth.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="public/css/main.css">

</head>

<body>
  <div class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">

      <div class="leading-loose">


        <form class="w-[700px]">
          <h1 class="text-[#106ba2] font-bold text-center text-[40px]  font-bold">Đăng ký</h1>
          <p class="text-[#106ba2] font-medium text-center text-[15px] mb-[20px] font-bold">Đăng ký tài khoản để nhận ưu
            đãi của...</p>
          <div class="flex input items-center text-lg  mb-6 md:mb-8">
            <i class=" ml-[10px] icon fa-regular fa-envelope text-[#106ba2]"></i>
            <input type="email" id="username" class="text-[#106ba2]  pl-[40px] rounded-md border bordder-[#E9EDF4] py-2 md:py-4 focus:outline-none w-full" placeholder="Email" />
          </div>
          <div class="mt-[15px] flex input items-center text-lg  mb-6 md:mb-8">
            <i class=" ml-[10px] icon fa-regular fa-user text-[#106ba2]"></i>
            <input type="text" id="username" class="text-[#106ba2]  pl-[40px] rounded-md border bordder-[#E9EDF4] py-2 md:py-4 focus:outline-none w-full" placeholder="Họ và tên" />
          </div>
          <div class=" mt-[15px] flex input items-center text-lg  mb-6 md:mb-8">
            <i class=" ml-[10px] icon fa-solid fa-key text-[#106ba2]"></i>
            <input type="password" id="password" class="text-[#106ba2]  pl-[40px] rounded-md border bordder-[#E9EDF4] py-2 md:py-4 focus:outline-none w-full" placeholder="Mật khẩu" />
          </div>
          <div class=" mt-[15px] flex input items-center text-lg  mb-6 md:mb-8">
            <i class=" ml-[10px] icon fa-solid fa-key text-[#106ba2]"></i>
            <input type="password" id="cfPassword" class="text-[#106ba2]  pl-[40px] rounded-md border bordder-[#E9EDF4] py-2 md:py-4 focus:outline-none w-full" placeholder="Xác nhận mật khẩu" />
          </div>
          <div class="mt-[15px] flex input items-center text-lg  mb-6 md:mb-8">
            <i class=" ml-[10px] icon fa-solid fa-phone-volume text-[#106ba2]"></i>
            <input type="number" id="phone" class="text-[#106ba2]  pl-[40px] rounded-md border bordder-[#E9EDF4] py-2 md:py-4 focus:outline-none w-full" placeholder="Số điện thoại" />
          </div>
          

          <div class="mt-[30px] pb-[50px] items-center flex justify-between">
            <button
              class="px-4 w-[700px] py-1 text-white font-light tracking-wider bg-[#106ba2] hover:opacity-70 rounded"
              type="submit">ĐĂNG KÝ</button>
          </div>


        </form>

      </div>

    </div>
  </div>
</body>

</html>