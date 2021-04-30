function total(addCount, addPrice, currentTotal = 0) {
    currentTotal += addPrice * addCount;
    return currentTotal;
}