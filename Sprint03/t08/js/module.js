class Node{
    constructor(data){
        this.data = data;
        this.next = null;
    }
}

class LinkedList {
    constructor(data){
        this.root = null;
        this.size = 0;
    }

    add(value){
        let node = new Node(value);
        let current;
        if(this.root == null){
            this.root = node;
        }
        else{
            current = this.root;

            while(current.next){
                current = current.next;
            }

            current.next = node;
        }
        this.size++;
    }

    remove(value){
        let current = this.root;
        let previous = null;

        while(current != null){
            if(current.data == value){
                if(previous == null){
                    this.root = current.next;
                } else{
                    previous.next = current.next;
                }
                this.size--;
            }
            previous = current;
            current = current.next;
        }
    }

    contains(value){
        let current = this.root;
        while(current != null){
            if(current.data == value){
                return true;
            }
            current = current.next;
        }
        return false;
    }

    [Symbol.iterator] = function* () {
        let current = this.root;
        while(current){
            yield current.data;
            current = current.next;
        }
    }

    clear(){
        let current = this.root;
        while(current){
            this.remove(current.data);
            current = current.next;
        }
        this.size = 0;
    }

    count(){
        return this.size;
    }

    log(){
        let res = [];
        let temp = this.root;
        while(temp){
            res.push(temp.data);
            temp = temp.next;
        }
        console.log(`"` + res.join(', ') + `"`);
    }
}

export function createLinkedList(arr){
    let ll = new LinkedList();
    let i = 0;
    while(arr[i] != null){
        ll.add(arr[i]);
        i++;
    }
    return ll;
}
