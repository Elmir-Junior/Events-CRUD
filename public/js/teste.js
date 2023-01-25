import { functionsIn, sortedLastIndexBy } from "lodash";


minimum = 3;


callbackDelayPairs = [callback, ]


function main(minimum, callbackDelayPairs){

}

async function callback(A, B)
{
    const X = Math.random();

    A(X);
    B(X);

}

function A(X){

    setTimeout(() => {
        console.log(X)
    }, 300);
}

function B(){
    console.log(X)
}

async function f(A, B) {

    const X = Math.random()
  
    if (X >= 0.5) {
  
      A.register(f, X)
  
    } else {
  
      B.register(f, X)
  
    }
  
    return new Promise(resolve => {
  
      setTimeout(() => resolve(X), 500)
  
    })
  
  }