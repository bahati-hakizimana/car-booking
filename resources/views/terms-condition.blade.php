<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="antialiased">


            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <img src="assets/images/Empower.png" alt="">
                    {{-- <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg> --}}
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                            <div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white mt-3" style="color: red;">CARS TERMS AND CONDITIONS TO BE FOLLOWED AT EAN LTD</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    	The car departs at 7:00 am and return at 8:00 pm, When a customer spend a night with a car, he must deliver it to the office at 7:00 AM early in the morning of the next day, if it is for 1 day rent. when the customer delays in returning the car he/she loses 5000 frw every 30 min on Caution /iyo ukodesheje imodoka uyitwara saamoya za mugitondo ukayigarura saambiri zijoro,iyo wahisemo gukoresha imodoka ninjoro ugomba kuyigarura saamoya zamugitondo,iyo utinze kugarura imodoka kuri causion yawe havaho amafaranga 5000 buri minota 30.
	When the car is rented for more than one day, it is returned on the last day at 8:00 p.m. /ukodesheje imodoka iminsi irenze umwe ayigarura kumunsi wanyuma saambiri zijoo


	To keep a car while the lease expires without notice is not allowed, fined 10,000 frw deducted from caution fee
/kugumana imodoka mugihe ubukode bwarangiye ntanteguza ntibyemewe utanga amande yibihumbi icumi 10,000 avanwa kuri caution
	Caution fee is automatically returned within 1 hour after returning the vehicle and being checked mechanical issue and traffic fine. /amafaranga ya caution uyasubizwa mu isaha imwe ugaruye imodoka hamaze gusuzumwa niba ntacyo wangije kumodoka cg nta mande ya police.
	The renting price in Kigali city is not the same as the provinces, when the car goes beyond where it was supposed to go,we stop it and our own driver go there and  pick it./ibiciro bikodeshwa imodoka ikoreshwa muri Kigali sikimwe nibyimodoka ikoreshwa muntara imodeka ikodeshejwe gukoreswa muntara yemerewe gukoreshwa numushoferi wacu.
	Leased vehicle is not allowed to be used in violation of national law/ntiwemerewe gukoresha imodoka yacu ibikorwa binyuranije namategeko yigihugu
	EAN’S Cars are not allowed to go outside of Rwandan territory /imodoka za AEN ntizemerewe gukoreshwa hanze yimipaka yurwanda.
	When a car has a technical problem, You must call us,it is prohibited to try fix it by yourself/igihe imodoka igize
	ikibazo 	kiri 	tekinike,uratumenyesha,ntiwemerewe 	kubyikoreshereza.
All penalties caused by violating the road sign during renting period must be paid by the customer. /ibihano byose byo kwica amategeko yumuhanda iyo ubiciwe mugihe wakodesheje imodoka niwowe muclient ubyishyura.
	When the customer commit an accident, all damages must be repaired him or her and pay all charges  including breakdown and pays all days car spent in the garage/mugihe umuclient akoze impanuka ibyangiritse byose arabyishyuraharimo na breakdown knd yishyura iminsi yose imodoka izamara mu igarage.
	When a customer is being arrested by police because of curfew or drink and drive, he or she pays all fines requested by law and pays all days car spent at police station /Iyo police ifunze imodoka kumakosa yumuclient kubera yatrwaye yasinze cg kuyandi makossa yamuturutseho yishyura amande yose imodoka iciwe knd akishyura iminsi yose izamara iri kuri police.
	Payment and caution are made at the end of the month, the extension of contract is accepted but it must be informed before five hours of the expiration of the current contract / kwishyura na caution bitorwa ukwezi kurangiye,kongera amasezerano biremewe arko bigomba kumeshwa mbere yamasaha 5 kugirango amaserano arangire.

                                </p>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white" style="color: red;">CAUTION FEE</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Caution fee per day is 25,000RWF <br>
                                    Caution fee per week is 70,000RWF <br>
                                    Caution fee per mounth is 150,000RWF <br>
                                    Caution fee per year is 2,500,000RWF <br>

                                </p>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white" style="color: red;">LOCATION</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    KICUKIRO CENTRE <br>
                                    KK 15 RD <br>
                                    SANGWA PLAZA <br>

                                </p>
                            </div>








                    </div>
                </div>


            </div>
        </div>
    </body>
</html>
