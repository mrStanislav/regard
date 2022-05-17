# Тестовое задание

> Задача №1
Напишите функцию, которая развернёт список.
Последний элемент должен стать первым, а первый - последним. 
$c→next должен содержать $b и так далее...

``` 
class test {
  public $next;
}

$a = new test();
$b = new test();
$c = new test();
$a->next = $b;
$b->next = $c;
$c->next = null;

Пример результата:
function reverse($a) {
  // какой-то код
}
$ob1 = reverse($a);
var_dump($ob1);
```
>> Ответ:
```
object(test)#3 (1) {
  ["next"]=>
  object(test)#2 (1) {
    ["next"]=>
    object(test)#1 (1) {
      ["next"]=>
      NULL
    }
  }
}
```

> Задача №3
Даны веса посылок $boxes и вес, который может увезти курьер $weight.
Курьер должен возить по 2 посылки, которые вместе по весу будут строго равны $weight.
Необходимо найти максимальное количество рейсов, которые курьер сможет сделать с учетом условий.
```
Даны веса посылок $boxes и вес, который может увезти курьер $weight.
Курьер должен возить по 2 посылки, которые вместе по весу будут строго равны $weight.
Необходимо найти максимальное количество рейсов, которые курьер сможет сделать с учетом условий.

// первые входные данные
$boxes = [1, 2, 1, 5, 1, 3, 5, 2, 5, 5];
$weight = 6;
// вторые входные данные
$boxes = [2,4,3,6,1];
$weight = 5;

public function getResult(array $boxes, int $weight): int
{
  // какой-то код
}
```
>> Ответ: 
```
Post #1 (1 kg)
Post #2 (2 kg)
Post #3 (1 kg)
Post #4 (5 kg)
Post #5 (1 kg)
Post #6 (3 kg)
Post #7 (5 kg)
Post #8 (2 kg)
Post #9 (5 kg)
Post #10 (5 kg)

Weight 6 kg

Delivering: post #4 (5 kg) and #5 (1 kg)
Delivering: post #7 (5 kg) and #3 (1 kg)
Delivering: post #9 (5 kg) and #1 (1 kg)
Delivering: post #10 (5 kg)
Delivering: post #6 (3 kg)
Delivering: post #2 (2 kg)
Delivering: post #8 (2 kg)


Total trip = 7

---------------------------------------

Post #1 (2 kg)
Post #2 (4 kg)
Post #3 (3 kg)
Post #4 (6 kg)
Post #5 (1 kg)

Weight 5 kg

Delivering: post #2 (4 kg) and #5 (1 kg)
Delivering: post #3 (3 kg) and #1 (2 kg)

UnDelivered post #4 (6 kg) > 5 kg

Total trip = 2
```

