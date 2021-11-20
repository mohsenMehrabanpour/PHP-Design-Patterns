## example description (english) :

Decorator is a structural design pattern that lets you attach new behaviors to objects by placing these objects inside special wrapper objects that contain the behaviors.  
in this example we have multiple service, that each one implements Base service interface, Base service interface
contain get_cost() method. in each decorator we inject the object that implements base service interface , so 
if we want the get multiple service cost, we should inject each one in other one. (as you see in code)
each decorator get_cost method create from current service cost and injected object cost . 

## توضیح مثال فارسی : 
دکوریتور یک الگوی طراحی سازنده است که به شما اجازه میدهد رفتار هایی رو به آبجکت هاتون اضافه کنید.  
توی این مثال ما چندتا سرویس داریم که همگی دارن از یک قرارداد پیروی میکنند که توی این قرارداد یک متد تحت عنوان
گرفتن هزینه وجود دارد. توی هریک از سرویس های یک و دو که دکوریتور ما هستند یک آبجکت که ازین قرارداد پیروی میکنه رو 
تزریق میکنیم ، و متد گرفتن قیمت هرکدوم حاصل قیمت کنونی و قیمت شی تزریق شده هست.  
از مزایای این روش بخوام بگم ، تغییرات رو اسون میکنه مثلا اگر شما هزینه سرویس پایتون تغییر کنه نیاز نیست برین
هرجا سرویس پایه داشتین رو تغییر بدین فقط کافیه برین قیمت کلاس سرویس پایه رو تغییر بدین . 