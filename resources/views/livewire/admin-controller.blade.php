<div>
    <main class="h-full  max-w-full">
        <div class="container full-container p-0 flex flex-col gap-6">

        @include('livewire.layouts.header')

          <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
             <div class="col-span-2">
                <div class="card">
                    <div class="card-body">
                        <div class="flex  justify-between mb-5">
                            <h4 class="text-gray-500 text-lg font-semibold sm:mb-0 mb-2">Profit & Expenses</h4>
                            <div class="hs-dropdown relative inline-flex [--placement:bottom-right] sm:[--trigger:hover]">
                                <a class="relative hs-dropdown-toggle cursor-pointer align-middle rounded-full">
                                    <i class="ti ti-dots-vertical text-2xl text-gray-400"></i>
                                </a>
                                <div class="card hs-dropdown-menu transition-[opacity,margin] rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[150px] hidden z-[12]"
                                    aria-labelledby="hs-dropdown-custom-icon-trigger">
                                    <div class="card-body p-0 py-2">
                                        <a href="javscript:void(0)" class="flex gap-2 items-center font-medium px-4 py-2.5 hover:bg-gray-200 text-gray-400">
                                            <p class="text-sm ">Action</p>
                                        </a>
                                        <a href="javscript:void(0)" class="flex gap-2 items-center font-medium px-4 py-2.5 hover:bg-gray-200 text-gray-400">
                                            <p class="text-sm ">Another Action</p>
                                        </a>
                                        <a href="javscript:void(0)" class="flex gap-2 items-center font-medium px-4 py-2.5 hover:bg-gray-200 text-gray-400">
                                            <p class="text-sm ">Something else here</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="profit"></div>
                    </div>
                </div>
             </div>
             
             <div class="flex flex-col gap-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-gray-500 text-lg font-semibold mb-4">Traffic Distribution</h4>
                        <div class="flex items-center justify-between gap-12">
                        <div >
                            <h3 class="text-[22px] font-semibold text-gray-500 mb-4">$36,358</h3>
                            <div class="flex items-center gap-1 mb-3">
                               <span class="flex items-center justify-center w-5 h-5 rounded-full bg-teal-400">
                                <i class="ti ti-arrow-up-left text-teal-500"></i>
                               </span>
                               <p class="text-gray-500 text-sm font-normal ">+9%</p>
                               <p class="text-gray-400 text-sm font-normal text-nowrap">last year</p>
                            </div>
                            <div class="flex gap-4">
                               <div class="flex gap-2 items-center">
                                <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                                <p class="text-gray-400 font-normal text-xs">Oragnic</p>
                               </div>
                               <div class="flex gap-2 items-center">
                                <span class="w-2 h-2 rounded-full bg-red-500"></span>
                                <p class="text-gray-400 font-normal text-xs"> Refferal</p>
                               </div>
                            </div>
                        </div>
                        <div class="flex  items-center">
                            <div id="grade"></div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="flex gap-6 items-center justify-between">
                        <div class="flex flex-col gap-4">
                            <h4 class="text-gray-500 text-lg font-semibold">Product Sales</h4>
                            <div class="flex flex-col gap-4">
                            <h3 class="text-[22px] font-semibold text-gray-500">$6,820</h3>
                            <div class="flex items-center gap-1">
                               <span class="flex items-center justify-center w-5 h-5 rounded-full bg-red-400">
                                <i class="ti ti-arrow-down-right text-red-500"></i>
                               </span>
                               <p class="text-gray-500 text-sm font-normal ">+9%</p>
                               <p class="text-gray-400 text-sm font-normal text-nowrap">last year</p>
                            </div>
                        </div>
                        </div>
                        
                            <div class="w-11 h-11 flex justify-center items-center rounded-full bg-red-500 text-white self-start">
                                <i class="ti ti-currency-dollar text-xl"></i>
                            </div>
                
                        </div>
                    </div>
                    <div id="earning"></div>
                </div>
             </div>


          </div>
           <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
              <div class="card">
                <div class="card-body">
                <h4 class="text-gray-500 text-lg font-semibold mb-5">Upcoming Schedules</h4>
                <ul class="timeline-widget relative">
                   <li class="timeline-item flex relative overflow-hidden min-h-[70px]">
                       <div class="timeline-time text-gray-500 text-sm min-w-[90px] py-[6px] pr-4 text-end">
                           9:30 am
                       </div>
                       <div class="timeline-badge-wrap flex flex-col items-center ">
                         <div class="timeline-badge w-3 h-3 rounded-full shrink-0 bg-transparent border-2 border-blue-600 my-[10px]">
                         </div>
                         <div class="timeline-badge-border block h-full w-[1px] bg-gray-100"></div>
                       </div>
                       <div class="timeline-desc py-[6px] px-4">
                        <p class="text-gray-500 text-sm font-normal">Payment received from John Doe of $385.90</p>
                       </div>
                   </li>
                   <li class="timeline-item flex relative overflow-hidden min-h-[70px]">
                       <div class="timeline-time text-gray-500 min-w-[90px] py-[6px] text-sm pr-4 text-end">
                           10:00 am
                       </div>
                       <div class="timeline-badge-wrap flex flex-col items-center ">
                         <div class="timeline-badge w-3 h-3 rounded-full shrink-0 bg-transparent border-2 border-blue-300 my-[10px]">
                         </div>
                         <div class="timeline-badge-border block h-full w-[1px] bg-gray-100"></div>
                       </div>
                       <div class="timeline-desc py-[6px] px-4 text-sm">
                        <p class="text-gray-500  font-semibold">New sale recorded</p>
                        <a href="javascript:void('')" class="text-blue-600">#ML-3467</a>
                       </div>
                   </li>

                   <li class="timeline-item flex relative overflow-hidden min-h-[70px]">
                    <div class="timeline-time text-gray-500 min-w-[90px] text-sm py-[6px] pr-4 text-end">
                        12:00 am
                    </div>
                    <div class="timeline-badge-wrap flex flex-col items-center ">
                      <div class="timeline-badge w-3 h-3 rounded-full shrink-0 bg-transparent border-2 border-teal-500 my-[10px]">
                      </div>
                      <div class="timeline-badge-border block h-full w-[1px] bg-gray-100"></div>
                    </div>
                    <div class="timeline-desc py-[6px] px-4">
                     <p class="text-gray-500 text-sm font-normal">Payment was made of $64.95 to Michael</p>
                    </div>
                </li>
                
                <li class="timeline-item flex relative overflow-hidden min-h-[70px]">
                    <div class="timeline-time text-gray-500 min-w-[90px] text-sm py-[6px] pr-4 text-end">
                        9:30 am
                    </div>
                    <div class="timeline-badge-wrap flex flex-col items-center ">
                      <div class="timeline-badge w-3 h-3 rounded-full shrink-0 bg-transparent border-2 border-yellow-500 my-[10px]">
                      </div>
                      <div class="timeline-badge-border block h-full w-[1px] bg-gray-100"></div>
                    </div>
                    <div class="timeline-desc py-[6px] px-4 text-sm">
                     <p class="text-gray-500 font-semibold">New sale recorded</p>
                     <a href="javascript:void('')" class="text-blue-600">#ML-3467</a>
                    </div>
                </li>

                <li class="timeline-item flex relative overflow-hidden min-h-[70px]">
                    <div class="timeline-time text-gray-500 text-sm min-w-[90px] py-[6px] pr-4 text-end">
                        9:30 am
                    </div>
                    <div class="timeline-badge-wrap flex flex-col items-center ">
                      <div class="timeline-badge w-3 h-3 rounded-full shrink-0 bg-transparent border-2 border-red-500 my-[10px]">
                      </div>
                      <div class="timeline-badge-border block h-full w-[1px] bg-gray-100"></div>
                    </div>
                    <div class="timeline-desc py-[6px] px-4">
                     <p class="text-gray-500 text-sm font-semibold">New arrival recorded</p>
                    </div>
                </li>
                <li class="timeline-item flex relative overflow-hidden">
                    <div class="timeline-time text-gray-500 text-sm min-w-[90px] py-[6px] pr-4 text-end">
                        12:00 am
                    </div>
                    <div class="timeline-badge-wrap flex flex-col items-center ">
                      <div class="timeline-badge w-3 h-3 rounded-full shrink-0 bg-transparent border-2 border-teal-500 my-[10px]">
                      </div>
                      <div class="timeline-badge-border block h-full w-[1px] bg-gray-100"></div>
                    </div>
                    <div class="timeline-desc py-[6px] px-4">
                     <p class="text-gray-500 text-sm font-normal">Payment Done</p>
                    </div>
                </li>							
                   
                </ul>
                </div>
              </div>
              <div class="col-span-2">
                <div class="card h-full">
                    <div class="card-body">
                        <h4 class="text-gray-500 text-lg font-semibold mb-5">Top Paying Clients</h4>
                        <div class="relative overflow-x-auto">
                            <!-- table -->
                            <table class="text-left w-full whitespace-nowrap text-sm text-gray-500">
                                <thead >
                                    <tr class="text-sm">
                                        <th scope="col" class="p-4 font-semibold">Profile</th>
                                        <th scope="col" class="p-4 font-semibold">Hour Rate</th>
                                        <th scope="col" class="p-4 font-semibold">Extra classes</th>
                                        <th scope="col" class="p-4 font-semibold">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-4 text-sm">
                                           <div class="flex gap-6 items-center">
                                            <div class="h-12 w-12 inline-block"><img src="./assets/images/profile/user-1.jpg" alt="" class="rounded-full w-100"></div>
                                            <div class="flex flex-col gap-1 text-gray-500">
                                              <h3 class=" font-bold">Mark J. Freeman</h3>
                                              <span class="font-normal">Prof. English</span>
                                          </div>
                                           </div>
                                        </td>
                                        <td class="p-4">
                                             <h3 class="font-medium">$150/hour</h3>
                                        </td>
                                        <td class="p-4">
                                            <h3 class="font-medium text-teal-500">+53</h3>
                                        </td>
                                        <td class="p-4">
                                            <span class="inline-flex items-center py-2 px-4 rounded-3xl font-semibold bg-teal-400 text-teal-500">Available</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 text-sm">
                                           <div class="flex gap-6 items-center">
                                            <div class="h-12 w-12 inline-block"><img src="./assets/images/profile/user-2.jpg" alt="" class="rounded-full w-100"></div>
                                            <div class="flex flex-col gap-1 text-gray-500">
                                              <h3 class=" font-bold">Nina R. Oldman</h3>
                                              <span class="font-normal">Prof. History</span>
                                          </div>
                                           </div>
                                        </td>
                                        <td class="p-4">
                                             <h3 class="font-medium">$150/hour</h3>
                                        </td>
                                        <td class="p-4">
                                            <h3 class="font-medium text-teal-500">+68</h3>
                                        </td>
                                        <td class="p-4">
                                            <span class="inline-flex items-center py-2 px-4 rounded-3xl font-semibold bg-blue-500 text-blue-600">In Class</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 text-sm">
                                           <div class="flex gap-6 items-center">
                                            <div class="h-12 w-12 inline-block"><img src="./assets/images/profile/user-3.jpg" alt="" class="rounded-full w-100"></div>
                                            <div class="flex flex-col gap-1 text-gray-500">
                                              <h3 class=" font-bold">Arya H. Shah</h3>
                                              <span class="font-normal">Prof. Maths</span>
                                          </div>
                                           </div>
                                        </td>
                                        <td class="p-4">
                                             <h3 class="font-medium">$150/hour</h3>
                                        </td>
                                        <td class="p-4">
                                            <h3 class="font-medium text-teal-500">+94</h3>
                                        </td>
                                        <td class="p-4">
                                            <span class="inline-flex items-center py-2 px-4 rounded-3xl font-semibold bg-red-400 text-red-500">Absent</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 text-sm">
                                           <div class="flex gap-6 items-center">
                                            <div class="h-12 w-12 inline-block"><img src="./assets/images/profile/user-4.jpg" alt="" class="rounded-full w-100"></div>
                                            <div class="flex flex-col gap-1 text-gray-500">
                                              <h3 class=" font-bold">June R. Smith</h3>
                                              <span class="font-normal">Prof. Arts</span>
                                          </div>
                                           </div>
                                        </td>
                                        <td class="p-4">
                                             <h3 class="font-medium">$150/hour</h3>
                                        </td>
                                        <td class="p-4">
                                            <h3 class="font-medium text-teal-500">+27</h3>
                                        </td>
                                        <td class="p-4">
                                            <span class="inline-flex items-center py-2 px-4 rounded-3xl font-semibold bg-yellow-400 text-yellow-500">Absent</span>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>									
                    </div>
                </div>
              </div>
           </div>
           <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-2 gap-6">
              <div class="card overflow-hidden">
                <div class="relative">
                    <a href="javascript:void(0)">
                        <img src="./assets/images/products/product-1.jpg" alt="product_img" class="w-full">
                    </a>
                    <a href="javascript:void(0)" class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                        <i class="ti ti-basket text-base"></i>
                    </a>
                </div>
                <div class="card-body">
                    <h6 class="text-base font-semibold text-gray-500 mb-1">Boat Headphone</h6>
                    <div class="flex justify-between">
                        <div class="flex gap-2 items-center ">
                            <h6 class=" text-gray-500 font-semibold text-base">$50</h6>
                            <span class="text-gray-400 font-medium text-sm opacity-80">
                                <del>$65</del>
                            </span>
                        </div>
                        <ul class="list-none flex gap-1">
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                        </ul>
                    </div>
                </div>
              </div>
              <div class="card overflow-hidden">
                <div class="relative">
                    <a href="javascript:void(0)">
                        <img src="./assets/images/products/product-2.jpg" alt="product_img" class="w-full">
                    </a>
                    <a href="javascript:void(0)" class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                        <i class="ti ti-basket text-base"></i>
                    </a>
                </div>
                <div class="card-body">
                    <h6 class="text-base font-semibold text-gray-500 mb-1">MacBook Air Pro</h6>
                    <div class="flex justify-between">
                        <div class="flex gap-2 items-center">
                            <h6 class="text-base text-gray-500 font-semibold">$650</h6>
                            <span class="text-gray-400 text-sm opacity-80">
                                <del>$900</del>
                            </span>
                        </div>
                        <ul class="list-none flex gap-1">
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                        </ul>
                    </div>
                </div>
              </div>
              <div class="card overflow-hidden">
                <div class="relative">
                    <a href="javascript:void(0)">
                        <img src="./assets/images/products/product-3.jpg" alt="product_img" class="w-full">
                    </a>
                    <a href="javascript:void(0)" class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                        <i class="ti ti-basket text-base"></i>
                    </a>
                </div>
                <div class="card-body">
                    <h6 class="text-base font-semibold text-gray-500 mb-1">Red Valvet Dress</h6>
                    <div class="flex justify-between">
                        <div class="flex gap-2 items-center">
                            <h6 class="text-base text-gray-500 font-semibold">$150</h6>
                            <span class="text-gray-400 text-sm opacity-80">
                                <del>$200</del>
                            </span>
                        </div>
                        <ul class="list-none flex gap-1">
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                        </ul>
                    </div>
                </div>
              </div>
              <div class="card overflow-hidden">
                <div class="relative">
                    <a href="javascript:void(0)">
                        <img src="./assets/images/products/product-4.jpg" alt="product_img" class="w-full">
                    </a>
                    <a href="javascript:void(0)" class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                        <i class="ti ti-basket text-base"></i>
                    </a>
                </div>
                <div class="card-body">
                    <h6 class="text-base font-semibold text-gray-500 mb-1">Cute Soft Teddybear</h6>
                    <div class="flex justify-between">
                        <div class="flex gap-2 items-center">
                            <h6 class="text-base text-gray-500 font-semibold">$285</h6>
                            <span class="text-gray-400 text-sm">
                                <del>$345</del>
                            </span>
                        </div>
                        <ul class="list-none flex gap-1">
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star-filled text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)" >
                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                            </a>
                          </li>
                        </ul>
                    </div>
                </div>
              </div>
           </div>
           <footer>
            <p class="text-base text-gray-400 font-normal p-3 text-center">
                Design and Developed by <a href="https://www.wrappixel.com/" target="_blank" class="text-blue-600 underline hover:text-blue-700">wrappixel.com</a>
            </p>
           </footer>
        </div>


    </main>
    <!-- Main Content End -->
</div>
