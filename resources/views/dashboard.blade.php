<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body class="bg-[#EAECFA]">
    <div class="flex lg:gap-[300px] md:gap-[70px] items-center">
        <div>
            <span class="absolute text-white cursor-pointer text-4xl top-5 left-4" onclick="Open()">
                <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
            </span>
            <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] p-2 w-[300px] overflow-y-auto text-center bg-[#F5F5F5]">

                <div class="">
                    <div class="flex items-center justify-between mt-1 p-2.5">
                        <img src="{{URL('images/Dashboard/LOGO.png')}}" alt="logo" class="w-[190px]">
                        <i class="bi bi-x text-black text-[20px] lg:hidden" onclick="Open()"></i>
                        <!-- <h1 class="font-bold text-gray-200 text-[15px] ml-3">BUILDA</h1> -->
                    </div>
                </div>
                <div
                    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                    <i class="bi bi-grid"></i>
                    <span class="lg:text-[20px] lg:leading-[32px] font-bold ml-4">Dashboard</span>
                </div>
                <div
                    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                    <i class="bi bi-envelope text-gray-500"></i>
                    <span class="text-[15px] ml-4">Inbox</span>
                </div>
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                    <i class="bi bi-search text-sm text-gray-500"></i>
                    <div class="flex justify-between w-full items-center">
                        <span class="text-[15px] ml-4">SEO</span>
                    </div>
                </div>
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                    <img src="{{URL('images/Dashboard/Book-open.png')}}" alt="Book-open">
                    <div class="flex justify-between w-full items-center">
                        <span class="text-[15px] ml-4">Management</span>
                    </div>
                </div>
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                    <i class="bi bi-bar-chart-fill text-gray-500"></i>
                    <div class="flex justify-between w-full items-center">
                        <span class="text-[15px] ml-4">Analytics</span>
                    </div>
                </div>
                <hr class="my-2 text-gray-600">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                    <i class="bi bi-gear text-gray-500"></i>
                    <div class="flex justify-between w-full items-center">
                        <span class="text-[15px] ml-4">Settings</span>
                    </div>
                </div>
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                    <i class="bi bi-question-circle text-gray-500"></i>
                    <div class="flex justify-between w-full items-center">
                        <span class="text-[15px] ml-4">Help</span>
                    </div>
                </div>
                <div class=" absolute bottom-0 left-0 right-0 p-2.5 mx-2.5 mb-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
                    <i class="bi bi-box-arrow-in-right text-gray-500"></i>
                    <span class="text-[15px] ml-4">Sign out</span>
                </div>
            </div>
        </div>
        <div class="w-full px-[50px] pt-[36px]">
            <div class="flex justify-between">
                <h6 class="text-[#0C0C0C] font-bold text-[20px] leading-[32px]">Welcome John</h6>
                <input type="search" placeholder="Search"
                    class="rounded-xl placeholder-[#0C0C0C] pl-4 outline-0 w-[30%] border border-[#0C0C0C]">
                <div class="flex items-center">
                    <div class="cursor-pointer">
                        <i class="bi bi-bell-fill text-[25px]"></i>
                    </div>
                    <div class="pl-[15px]">
                        <img src="{{URL('images/Dashboard/Profile.png')}}" alt="Profile">
                    </div>
                    <span class="font-semibold text-[20px] leading-[32px] pl-2">John Doe</span>
                </div>
            </div>
            <div class="bg-white mt-[47px] mb-4 rounded-[8px] pb-[37px]">
                <div class="flex py-4 px-4">
                    <div class="pr-4">
                        <img src="{{URL('images/Dashboard/hero-image.png')}}" alt="hero-image">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h6 class="font-bold text-[20px] leading-[32px] text-[#000000]">Cooking Academy</h6>
                        <a href="https://www.homecookingacademy.com"
                            class="font-bold text-[14px] leading-[20px] text-[#7C7C7C]">https://www.homecookingacademy.com</a>
                        <a href="/" class="font-bold text-[14px] leading-[20px] text-[#2E3ED1]">Visit your site</a>
                    </div>
                </div>
                <div class="flex px-4">
                    <div class="border-r border-r-[#5F5F5F] pr-[30px]">
                        <p class="font-bold leading-[28px] text-[#0C0C0C]">Site Team; Only you</p>
                        <p class="font-bold text-[14px] leading-[20px] text-[#2E3ED1]">Invite People</p>
                    </div>
                    <div class="border-r border-r-[#5F5F5F] pl-[30px] pr-[30px]">
                        <p class="font-bold leading-[28px] text-[#0C0C0C]">Site Plan; Unlimited</p>
                        <p class='font-bold text-[14px] leading-[20px] text-[#2E3ED1]''>Manage Plan</p>
                    </div>
                    <div class="border-r border-r-[#5F5F5F] pl-[30px] pr-[30px]">
                        <p class="font-bold leading-[28px] text-[#0C0C0C]">Domain; Not Connected</p>
                        <p class="font-bold text-[14px] leading-[20px] text-[#2E3ED1]">Connect Domain</p>
                    </div>
                    <div class="pl-[30px]">
                        <p class="font-bold leading-[28px] text-[#0C0C0C]">Ascend Plan; Free</p>
                        <p class="font-bold text-[14px] leading-[20px] text-[#2E3ED1]">Compare Plan</p>
                    </div>
                </div>
            </div>
            <div class='bg-white px-4 rounded-[8px] py-[17px] mb-4'>
                <div class="pb-4">
                    <h6 class='font-bold text-[20px] leading-[32px] text-[#000000]'>Let’s setup your site</h6>
                    <p class="font-normal text-[14px] leading-[22px] text-[#000000]">Selected type; Yoga Studio 
                    <span class="text-[#1C267F] text-[14px] leading-[22px] font-normal">change</span></p>
                </div>
                <div class='bg-[#EAECFA] flex items-center rounded-[8px] justify-between px-[15px] py-[14px] mb-4'>
                    <div>
                        <h6 class='font-bold text-[20px] leading-[32px]'>Choose the feature you need</h6>
                        <p class="text-[#5F5F5F] text-[14px] leading-[20px] font-normal">Tell us about your site and we’ll get the right
                            tools for you.</p>
                    </div>
                    <div>
                        <button class="text-white py-1 px-4 rounded-[8px] bg-[#2E3ED1;] font-bold">Choose feature</button>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="flex justify-between items-start">
                            <div class='flex items-center align-bottom'>
                                <img src="{{URL('images/Dashboard/Step Loader.png')}}" alt="Step">
                                <div class="pl-[15px]">
                                    <p class="font-bold leading-[28px]">Get your site online</p>
                                    <p class="font-normal text-[14px] leading-[22px] text-[#7C7C7C]">Publish and get your website found online</p>
                                </div>
                            </div>
                            <div>
                                <div class="border flex items-center py-4 px-2 mb-[22px]">
                                    <div class="border rounded-full bg-[#2E3ED1] w-[11px] h-[11px]"></div>
                                    <div class="flex items-center justify-between">
                                        <h6 class="text-[14px] leading-[22px] font-bold pr-[72px] pl-4">Publish your website</h6>
                                        <div class="flex items-center">
                                            <h6 class="text-[14px] leading-[20px] font-bold">Skip</h6>
                                            <button class="bg-white border border-[#202B92] ml-[14px] py-1 px-4 rounded-lg">Go to Editor</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="border flex items-center py-4 px-2 mb-[22px]">
                                    <div class="border rounded-full bg-[#2E3ED1] w-[11px] h-[11px]"></div>
                                    <div class="flex items-center justify-between">
                                        <h6 class="text-[14px] leading-[22px] font-bold pr-[39px] pl-4">Connect a custom domain</h6>
                                        <div class="flex items-center">
                                            <h6 class="text-[14px] leading-[20px] font-bold">Skip</h6>
                                            <button class="bg-white border border-[#202B92] ml-[14px] py-1 px-4 rounded-lg">Get Domain</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="border flex items-center py-4 px-2">
                                    <div class="border rounded-full bg-[#2E3ED1] w-[11px] h-[11px]"></div>
                                    <div class="flex items-center justify-between">
                                        <h6 class="text-[14px] leading-[22px] font-bold pr-[79px] pl-4">Get found on google</h6>
                                        <div class="flex items-center">
                                            <h6 class="text-[14px] leading-[20px] font-bold">Skip</h6>
                                            <button class="bg-white border border-[#202B92] ml-[14px] py-1 px-4 rounded-lg">Start a SEO</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white px-4 py-[17px] rounded-lg mb-5">
                <h6 class='font-bold text-[20px] leading-[32px] text-[#000000] pb-4'>Suggested For You.</h6>
                <div class="flex">
                    <div class="pr-4">
                        <img src="{{URL('images/Dashboard/suggestion-Image.png')}}" alt="suggestion-Image">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h6 class="font-bold text-[20px] leading-[32px] text-[#000000]">Create your custom domain and manage site efficiently.</h6>
                        <a href="/" class="font-bold text-[14px] leading-[20px] text-[#7C7C7C]">Connect a custom domain</a>
                        <a href="/" class="font-bold text-[14px] leading-[20px] text-[#2E3ED1]">Get a domain</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function dropdown() {
            document.querySelector('#submenu').classList.toggle('hidden')
            document.querySelector('#arrow').classList.toggle('rotate-0')
        }
        dropdown()
        function Open() {
            document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        }
    </script>
</body>
</html>