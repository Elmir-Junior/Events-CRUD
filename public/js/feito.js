f();

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



  async function f1(A, B) {

    A.register(f1, 4)
  
    return 4
  
  }
  
  async function f2(A, B) {
  
    B.register(f2, 5)
  
    return 5
  
  }
  
  async function f3(A, B) {
  
    A.register(f3, 20)
  
    return 20
  
  }
  
  
  minimum = 5
  
  callbackDelayPairs = [
  
    [f1, 100],
  
    [f2, 0],
  
    [f3, 5000],
  
  ]
  
  
  Output:
  
  {
  
    all: [[f1, 4], [f2, 5], [f3, 20]],
  
    filtered: [[f3, 20], [f2, 5]],
  
  }