function Total(qty,ud,total,value) {
    qty = document.getElementById(qty);
    ud > 0 ? qty.value++ : qty.value--;
    qty.value = Math.max(qty.value, 0);
    document.getElementById(total).value = qty.value * value;
}