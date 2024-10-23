
/* 1. Determina si un numero es igual a 6


const num = 7;
if (num==6) {
    console.log("El numero es igual a 6")
} else {
    console.log("El numero no es igual a 6")
}*/

//2. Calcula el doble de un numero//

/*
const num = 5;
console.log("El doble de "+num+" es "+num*2);
*/



//3. mostrar numero del 5 al 1//


/*
const inicio = 5;
for (let i = inicio; i>=1; i--) {
    console.log(i);
}
*/


//4. determinar sim el numero es positivo//

/*
const num = 7;
if (num>0) {
    console.log("Es positivo")

} else if (num<0) {
    console.log("Es negativo");
} else {
    console.log("El numero es 0");
}
*/

//5. calcular area cuiadrado y volumen de un cubo dado su lado//
/*
const lado = 5;
console.log("El área del cuadrado de lado "+lado+" es: "+(lado*lado));
console.log("Y el volumen de un cubo dado con arista "+lado+" es: "+(lado*lado*lado))
*/

//6. mostrar pares del 1 al 10//


/*
for (let i =0; i<=10; i++) {
    if (i%2 ==0) {
        console.log(i+" es par");
    }
}
*/


//7. determinar si un numero es multiplo de 3//

/*
const num = 15;
if (num%3==0) {
    console.log(num +" es multiplo de 3")
}
*/



//8. Calcular area triangulo rectangulo dados sus catetos//

/*
const base = 5;
const altura = 7;
console.log("El area del triangulo es: "+((base*altura)/2))
*/

//9. determinar si un numeroe s opostiivo, negativo o 0//

/*
const num = 7;
if (num>0) {
    console.log("Es positivo")

} else if (num<0) {
    console.log("Es negativo");
} else {
    console.log("El numero es 0");
}
*/

//10. Calcular el promedio de dos numeros//

/*
const num1=9; const num2= 17;
console.log((num1+num2)/2);
*/


//11. Calcular la suma de los numeros pares del 1 a N, donde N es un numero ingresado por el usuario//

/* ESTÁ EN JAVA PARA PEDIR LOS DATOS POR TECLADO //
Scanner sc = new Scanner(System.in);
int n = sc.nextInt();
int total  = 0;
for (let i = 1; i<=n; i++) {
    if (i%2==0) {
        total+=i;
    }
}
System.out.println("La suma de todos los pares de 1 a "+n+" es igual a "+total);
*/


//12. Determina si un numero es perfecto, su suma de divisores propios esn iogual al numero//



//13. calcula el factorial de un numero//

/*
const num = 6;
let total = 1;
for (let i = 1; i<=num; i++) {
    total = total*i;
}
console.log(total);
*/




//14. dada la base y el exponente, calcula la potencia

/*
let base = 3;
const expo = 3;
console.log(Math.pow(base,expo));
*/



//15. calcula la media de varios numeros positivos introducidos por teclado distintos de 0

//suponemos que hay scanner
