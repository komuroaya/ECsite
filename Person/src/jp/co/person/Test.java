package jp.co.person;

public class Test {
	public static void main(String[] args){
Person taro = new Person();
taro.name="山田太郎";
taro.age=20;
taro.phoneNumber="080-1234-5678";
taro.address="taro@gmail.com";

System.out.println(taro.name);
System.out.println(taro.age);
System.out.println(taro.phoneNumber);
System.out.println(taro.address);
taro.talk();
taro.talk();
taro.run();



Person jiro= new Person();
jiro.name="木村次郎";
jiro.age=18;

System.out.println(jiro.name);
System.out.println(jiro.age);
;


Person hanako= new Person();
hanako.name="鈴木花子";
hanako.age=16;

System.out.println(hanako.name);
System.out.println(hanako.age);



Person aya= new Person();
aya.name="小室絢";
aya.age=26;

System.out.println(aya.name);
System.out.println(aya.age);
;

Robot aibo=new Robot();
aibo.name="aibo";
aibo.talk();
aibo.walk();
aibo.run();

Robot asimo=new Robot();
asimo.name="asimo";
asimo.talk();
asimo.walk();
asimo.run();


Robot pepper=new Robot();
pepper.name="pepper";
pepper.talk();
pepper.walk();
pepper.run();
	}
}

