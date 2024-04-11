<script setup>

</script>

<template>
    <div class="container sm:rounded-[10px] rounded-none bg-black2 z-[1] contact-area bg-parallax"
         style="background-image:url('assets/images/background/pic13.png'); background-attachment: fixed;">
        <div class="row items-center">
            <div class="lg:w-8/12 md:w-full mb-[30px] px-[15px]">
                <div class="contact-head mb-[30px]">
                    <h4 class="title mb-2 text-white">Book a Table</h4>
                    <p class="text-white mb-4 opacity-75 sm:text-base text-sm">Lorem Ipsum is that it has a more-or-less
                        normal distribution<br> of letters, to using making it look like readable English.</p>
                </div>
                <form>
                    <div class="row">
                        <div class="md:w-1/2 w-full mb-[30px] px-[15px]">
                            <div class="relative flex gap-1 items-center w-full border-b border-white">
                                <div class="w-[35px] h-[50px] leading-10">
                                    <i class="flaticon-user text-white text-2xl align-middle inline-flex"></i>
                                </div>
                                <input class="placeholder:text-white bg-transparent p-0 leading-2xl pb-0.5 text-lg border-0 text-white font-medium h-[48px] outline-none relative top-[-5px] focus:ring-0" name="dzName" placeholder="Your Name"
                                       required=""
                                       type="text">
                            </div>
                        </div>
                        <div class="md:w-1/2 w-full mb-[30px] px-[15px]">
                            <div class="relative flex gap-1 items-center w-full border-b border-white">
                                <div class="w-[35px] h-[50px] leading-10">
                                    <i class="flaticon-phone-call text-white text-2xl align-middle inline-flex"></i>
                                </div>
                                <input class="placeholder:text-white bg-transparent p-0 leading-2xl pb-0.5 text-lg border-0 text-white font-medium h-[48px] outline-none relative top-[-5px] focus:ring-0" name="dzName" placeholder="Phone Number"
                                       required=""
                                       type="text">
                            </div>
                        </div>
                        <div class="md:w-1/2 w-full mb-[30px] px-[15px]">
                            <div class="relative flex gap-3 items-center w-full border-b border-white">
                                <div class="w-[35px] h-[50px] leading-10">
                                    <i class="flaticon-two-people text-white text-2xl align-middle inline-flex"></i>
                                </div>
                                <select
                                    class="nice-select style-1 text-white flex-1 bg-transparent border-0 text-lg font-normal outline-none relative focus:ring-0"
                                    style="display: none;">
                                    <option value="Member">Number Of People</option>
                                    <option value="Member1">1</option>
                                    <option value="Member2">2</option>
                                    <option value="Member3">3</option>
                                    <option value="Member4">4</option>
                                    <option value="Member5">5</option>
                                    <option value="Member6">6</option>
                                    <option value="Member7">7</option>
                                    <option value="Member8">8</option>
                                    <option value="Member9">9</option>
                                    <option value="Member10">10</option>
                                </select>
                                <div
                                    class="nice-select style-1 text-white flex-1 bg-transparent border-0 text-lg font-normal outline-none relative focus:ring-0"
                                    tabindex="0"><span class="current">Number Of People</span>
                                    <ul class="list">
                                        <li class="option selected" data-value="Member">Number Of People</li>
                                        <li class="option" data-value="Member1">1</li>
                                        <li class="option" data-value="Member2">2</li>
                                        <li class="option" data-value="Member3">3</li>
                                        <li class="option" data-value="Member4">4</li>
                                        <li class="option" data-value="Member5">5</li>
                                        <li class="option" data-value="Member6">6</li>
                                        <li class="option" data-value="Member7">7</li>
                                        <li class="option" data-value="Member8">8</li>
                                        <li class="option" data-value="Member9">9</li>
                                        <li class="option" data-value="Member10">10</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-1/2 w-full mb-[30px] px-[15px]">
                            <div class="relative flex gap-1 items-center w-full border-b border-white">
                                <div class="w-[35px] h-[50px] leading-10">
                                    <i class="flaticon-email-1 text-white text-2xl align-middle inline-flex"></i>
                                </div>
                                <input class="placeholder:text-white bg-transparent p-0 leading-2xl pb-0.5 text-lg border-0 text-white font-medium h-[48px] outline-none relative top-[-5px] focus:ring-0" name="dzName" placeholder="Your Email"
                                       required=""
                                       type="text">
                            </div>
                        </div>
                        <div class="md:w-1/2 w-full mb-[30px] px-[15px]">
                            <div class="relative flex gap-1 items-center w-full border-b border-white">
                                <div class="w-[35px] h-[50px] leading-10">
                                    <i class="flaticon-clock text-white text-2xl align-middle inline-flex"></i>
                                </div>
                                <input id="timePickerOnly" class="placeholder:text-white bg-transparent p-0 leading-2xl pb-0.5 text-lg border-0 text-white font-medium h-[48px] outline-none relative top-[-5px] focus:ring-0" name="dzName" placeholder="Time"
                                       required=""
                                       type="text">
                            </div>
                        </div>
                        <div class="md:w-1/2 w-full mb-[30px] px-[15px]">
                            <div class="relative flex gap-1 items-center w-full border-b border-white">
                                <div class="w-[35px] h-[50px] leading-10">
                                    <i class="flaticon-calendar-date text-white text-2xl align-middle inline-flex"></i>
                                </div>
                                <input id="datePickerOnly" aria-haspopup="true" aria-owns="datePickerOnly_root" aria-readonly="false"
                                       class="placeholder:text-white bg-transparent p-0 leading-2xl pb-0.5 text-lg border-0 text-white font-medium h-[48px] outline-none relative top-[-5px] focus:ring-0 form-control filled picker__input"
                                       name="dzName" placeholder="Date" readonly="" required=""
                                       type="text">
                                <div id="datePickerOnly_root" aria-hidden="true" class="picker">
                                    <div class="picker__holder" tabindex="-1">
                                        <div class="picker__frame">
                                            <div class="picker__wrap">
                                                <div class="picker__box">
                                                    <div class="picker__header">
                                                        <div class="picker__month">April</div>
                                                        <div class="picker__year">2024</div>
                                                        <div aria-controls="datePickerOnly_table" class="picker__nav--prev" data-nav="-1"
                                                             role="button" tabindex="0"
                                                             title="Previous month"></div>
                                                        <div aria-controls="datePickerOnly_table" class="picker__nav--next" data-nav="1"
                                                             role="button" tabindex="0"
                                                             title="Next month"></div>
                                                    </div>
                                                    <table id="datePickerOnly_table" aria-controls="datePickerOnly" aria-readonly="true"
                                                           class="picker__table" role="grid">
                                                        <thead>
                                                        <tr>
                                                            <th class="picker__weekday" scope="col" title="Sunday">Sun
                                                            </th>
                                                            <th class="picker__weekday" scope="col" title="Monday">Mon
                                                            </th>
                                                            <th class="picker__weekday" scope="col" title="Tuesday">
                                                                Tue
                                                            </th>
                                                            <th class="picker__weekday" scope="col" title="Wednesday">
                                                                Wed
                                                            </th>
                                                            <th class="picker__weekday" scope="col" title="Thursday">
                                                                Thu
                                                            </th>
                                                            <th class="picker__weekday" scope="col" title="Friday">Fri
                                                            </th>
                                                            <th class="picker__weekday" scope="col" title="Saturday">
                                                                Sat
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div id="datePickerOnly_1711823400000"
                                                                     aria-label="31 March, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1711823400000"
                                                                     role="gridcell" tabindex="0">31
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1711909800000"
                                                                     aria-label="1 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1711909800000"
                                                                     role="gridcell" tabindex="0">1
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1711996200000"
                                                                     aria-label="2 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1711996200000"
                                                                     role="gridcell" tabindex="0">2
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1712082600000"
                                                                     aria-label="3 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1712082600000"
                                                                     role="gridcell" tabindex="0">3
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1712169000000"
                                                                     aria-label="4 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1712169000000"
                                                                     role="gridcell" tabindex="0">4
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1712255400000"
                                                                     aria-label="5 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1712255400000"
                                                                     role="gridcell" tabindex="0">5
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1712341800000"
                                                                     aria-label="6 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1712341800000"
                                                                     role="gridcell" tabindex="0">6
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div id="datePickerOnly_1712428200000"
                                                                     aria-label="7 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1712428200000"
                                                                     role="gridcell" tabindex="0">7
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div
                                                                    id="datePickerOnly_1712514600000"
                                                                    aria-activedescendant="1712514600000"
                                                                    aria-label="8 April, 2024" class="picker__day picker__day--infocus picker__day--today picker__day--highlighted"
                                                                    data-pick="1712514600000" role="gridcell"
                                                                    tabindex="0">8
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1712601000000"
                                                                     aria-label="9 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1712601000000"
                                                                     role="gridcell" tabindex="0">9
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1712687400000"
                                                                     aria-label="10 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1712687400000"
                                                                     role="gridcell" tabindex="0">10
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1712773800000"
                                                                     aria-label="11 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1712773800000"
                                                                     role="gridcell" tabindex="0">11
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1712860200000"
                                                                     aria-label="12 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1712860200000"
                                                                     role="gridcell" tabindex="0">12
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1712946600000"
                                                                     aria-label="13 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1712946600000"
                                                                     role="gridcell" tabindex="0">13
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div id="datePickerOnly_1713033000000"
                                                                     aria-label="14 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713033000000"
                                                                     role="gridcell" tabindex="0">14
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1713119400000"
                                                                     aria-label="15 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713119400000"
                                                                     role="gridcell" tabindex="0">15
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1713205800000"
                                                                     aria-label="16 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713205800000"
                                                                     role="gridcell" tabindex="0">16
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1713292200000"
                                                                     aria-label="17 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713292200000"
                                                                     role="gridcell" tabindex="0">17
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1713378600000"
                                                                     aria-label="18 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713378600000"
                                                                     role="gridcell" tabindex="0">18
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1713465000000"
                                                                     aria-label="19 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713465000000"
                                                                     role="gridcell" tabindex="0">19
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1713551400000"
                                                                     aria-label="20 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713551400000"
                                                                     role="gridcell" tabindex="0">20
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div id="datePickerOnly_1713637800000"
                                                                     aria-label="21 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713637800000"
                                                                     role="gridcell" tabindex="0">21
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1713724200000"
                                                                     aria-label="22 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713724200000"
                                                                     role="gridcell" tabindex="0">22
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1713810600000"
                                                                     aria-label="23 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713810600000"
                                                                     role="gridcell" tabindex="0">23
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1713897000000"
                                                                     aria-label="24 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713897000000"
                                                                     role="gridcell" tabindex="0">24
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1713983400000"
                                                                     aria-label="25 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1713983400000"
                                                                     role="gridcell" tabindex="0">25
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1714069800000"
                                                                     aria-label="26 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1714069800000"
                                                                     role="gridcell" tabindex="0">26
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1714156200000"
                                                                     aria-label="27 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1714156200000"
                                                                     role="gridcell" tabindex="0">27
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div id="datePickerOnly_1714242600000"
                                                                     aria-label="28 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1714242600000"
                                                                     role="gridcell" tabindex="0">28
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1714329000000"
                                                                     aria-label="29 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1714329000000"
                                                                     role="gridcell" tabindex="0">29
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1714415400000"
                                                                     aria-label="30 April, 2024"
                                                                     class="picker__day picker__day--infocus" data-pick="1714415400000"
                                                                     role="gridcell" tabindex="0">30
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1714501800000"
                                                                     aria-label="1 May, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1714501800000"
                                                                     role="gridcell" tabindex="0">1
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1714588200000"
                                                                     aria-label="2 May, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1714588200000"
                                                                     role="gridcell" tabindex="0">2
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1714674600000"
                                                                     aria-label="3 May, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1714674600000"
                                                                     role="gridcell" tabindex="0">3
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1714761000000"
                                                                     aria-label="4 May, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1714761000000"
                                                                     role="gridcell" tabindex="0">4
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div id="datePickerOnly_1714847400000"
                                                                     aria-label="5 May, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1714847400000"
                                                                     role="gridcell" tabindex="0">5
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1714933800000"
                                                                     aria-label="6 May, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1714933800000"
                                                                     role="gridcell" tabindex="0">6
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1715020200000"
                                                                     aria-label="7 May, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1715020200000"
                                                                     role="gridcell" tabindex="0">7
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1715106600000"
                                                                     aria-label="8 May, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1715106600000"
                                                                     role="gridcell" tabindex="0">8
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1715193000000"
                                                                     aria-label="9 May, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1715193000000"
                                                                     role="gridcell" tabindex="0">9
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1715279400000"
                                                                     aria-label="10 May, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1715279400000"
                                                                     role="gridcell" tabindex="0">10
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="datePickerOnly_1715365800000"
                                                                     aria-label="11 May, 2024"
                                                                     class="picker__day picker__day--outfocus" data-pick="1715365800000"
                                                                     role="gridcell" tabindex="0">11
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="picker__footer">
                                                        <button aria-controls="datePickerOnly" class="picker__button--today"
                                                                data-pick="1712514600000" disabled=""
                                                                type="button">Today
                                                        </button>
                                                        <button aria-controls="datePickerOnly" class="picker__button--clear"
                                                                data-clear="1" disabled=""
                                                                type="button">Clear
                                                        </button>
                                                        <button aria-controls="datePickerOnly" class="picker__button--close"
                                                                data-close="true" disabled=""
                                                                type="button">Close
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-[15px]">
                            <button class="md:py-[15px] py-[10px] md:px-[30px] px-5 mt-4 font-medium md:text-base text-sm leading-2xl overflow-hidden z-[1] bg-primary text-white rounded-[6px] relative inline-flex items-center justify-start duration-500 focus:ring-0 btn-hover-1" name="submit" type="submit"
                                    value="submit">
                                <span>Book a Table</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="lg:w-1/3 w-full px-[15px]">
                <div class="widget widget_getintuch sm:p-[30px] p-[15px] lg:mb-0 mb-[30px] bg-primary rounded-[10px]">
                    <div class="head mb-10">
                        <h5 class="title text-white text-2xl mb-2">Contact Info</h5>
                        <p class="text-white opacity-75 text-[15px]">Lorem Ipsum is simply dummy text of the printing
                            typesetting industry.</p>
                    </div>
                    <ul>
                        <li>
                            <i class="flaticon-placeholder text-[var(--secondary)]"></i>
                            <p class="sm:text-base text-[15px] sm:tracking-[0.02em] tracking-[0] text-white">1247/Plot
                                No. 39, 15th Phase, Colony, Kkatpally, Hyderabad</p>
                        </li>
                        <li>
                            <i class="flaticon-telephone text-[var(--secondary)]"></i>
                            <p class="sm:text-base text-[15px] sm:tracking-[0.02em] tracking-[0] text-white">+91
                                987-654-3210<br>
                                +91 123-456-7890</p>
                        </li>
                        <li class="mb-0">
                            <i class="flaticon-email-1 text-[var(--secondary)]"></i>
                            <p class="sm:text-base text-[15px] sm:tracking-[0.02em] tracking-[0] text-white">
                                info@example.com<br>
                                info@example.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
