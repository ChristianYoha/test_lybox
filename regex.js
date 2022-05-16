

const ExtractRent: float = (content: string ) =>{

    var currency = ["euros", "€"];
    var period  = ["par mois", "/mois"];
    let rent;
    currency.forEach(curr => {
        if(content.search(curr) > 0){
            period.forEach(per => {
                if(content.search(per)){
                    rent = content.replace(/\D/g, '');
                }
            })
        }
    });
    return ;
}

ExtractRent("Loyer en cours de 430 € /mois hors charges");