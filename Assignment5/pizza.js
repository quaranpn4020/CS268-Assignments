
function validateForm() {
    // First check
    if (document.pizzaOrderForm.size.value == "") {
         alert("Please select a size")
         return false;
    }    
    
    // Second check
    if (!document.pizzaOrderForm.jalapeno.checked) {
        alert("Needs more jalapenos");
        return false;
    }
    
    // Third check
    if (document.pizzaOrderForm.comments.value == "") {
        alert("Leave a comment");
        return false;
    }
        
    return true;
}