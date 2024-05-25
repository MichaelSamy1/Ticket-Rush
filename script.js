const API = 'ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2T1RjM01qUTJMQ0p1WVcxbElqb2lhVzVwZEdsaGJDSjkua2N1YmF0UThnbUpHZFJzRE00SlAzQ3hLTEJmMnBVeXk5ejVySDZsZjlYby1OaEdkZE1yQmZjSmFXZWp4Ync1dTF6dGJvZHQ4OFBtQzc2alJjcXRFaVE='
async function firststep () {
    let data = {
        "api_key": API
    }
    let request = await fetch ('https://accept.paymob.com/api/auth/tokens', {
        method : 'post',
        headers : {'content-type' : 'application/json'},
        body : JSON.stringify(data)
    })

    let response = await request.json()
    
    let token = response.token

    secondstep (token)
}

async function secondstep (token){
    let data= {
        "auth_token":  token,
        "delivery_needed": "false",
        "amount_cents": "100",
        "currency": "EGP",
        "items": [],
        
      }
    let request = await fetch ('https://accept.paymob.com/api/ecommerce/orders', {
        method : 'post',
        headers : {'content-type' : 'application/json'},
        body : JSON.stringify(data)
    })

    let response = await request.json()

    let id = response.id

    thirdstep(token , id)
}

async function thirdstep (token , id){
    let data = {
        "auth_token": token,
        "amount_cents": "100", 
        "expiration": 3600, 
        "order_id": id,
        "billing_data": {
          "apartment": "803", 
          "email": "claudette09@exa.com", 
          "floor": "42", 
          "first_name": "Clifford", 
          "street": "Ethan Land", 
          "building": "8028", 
          "phone_number": "+86(8)9135210487", 
          "shipping_method": "PKG", 
          "postal_code": "01898", 
          "city": "Jaskolskiburgh", 
          "country": "CR", 
          "last_name": "Nicolas", 
          "state": "Utah"
        }, 
        "currency": "EGP", 
        "integration_id": 4578504
      }
    let request = await fetch ('https://accept.paymob.com/api/acceptance/payment_keys', {
        method : 'post',
        headers : {'content-type' : 'application/json'},
        body : JSON.stringify(data) 
    })

    let response = await request.json()

    let thetoken = response.token
    cardpayment (thetoken)
}

async function cardpayment (token){

    let ifram = `https://accept.paymob.com/api/acceptance/iframes/847262?payment_token=${token}`

    location.href = ifram
}

