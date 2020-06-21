const input1 = document.getElementById("n1") as HTMLInputElement;
const input2 = document.getElementById("n2") as HTMLInputElement;
const button = document.getElementById("button");

function sum(x: number, y:number){
    return x + y;
}

button.addEventListener("click", () => {
    console.log(Number(input1.value), Number(input2.value));
});