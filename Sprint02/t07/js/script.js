function sortEvenOdd(arr) {
    for (let i = arr.length - 1; i > 0; i--) {
        for (let j = 0; j < i; j++) {
            if(arr[j] > arr[j + 1]) {
                let spaw = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = spaw;
            }
            if (arr[j] % 2 != 0) {
                let spaw = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = spaw;    
            }
            if (arr[j] % 2 != 0 && arr[j + 1] % 2 != 0) {
                let spaw = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = spaw;
            }
        }
    }
}