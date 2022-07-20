# API REST with PHP

## [API REST](https://tools4devs.herokuapp.com/) 

```bash
https://tools4devs.herokuapp.com/
```

### [API REST Documentation](https://tools4devs.herokuapp.com/docs)

```bash
https://tools4devs.herokuapp.com/docs
```

## ENDPOINTS

### API REST version

#### CURL

```bash
curl -X 'GET' 'https://tools4devs.herokuapp.com/' -H 'accept: application/json'
```

#### Request URL

```bash
https://tools4devs.herokuapp.com/
```

#### Response BODY

```bash
{
  "version": "20.07.2022.1"
}
```

---

### Text to QR

#### CURL

```bash
curl -X 'GET' 'https://tools4devs.herokuapp.com/qr/?text=Hello%20world' -H 'accept: application/json'
```

#### Request URL

```bash
https://tools4devs.herokuapp.com/captcha/?text=Hello%20world
```

#### Response BODY

```bash
{
  "text": "Hello world",
  "url": "https://tools4devs.herokuapp.com/static/qr.png"
}
```

---

### Text to CAPTCHA

#### CURL

```bash
curl -X 'GET' 'https://tools4devs.herokuapp.com/captcha/?text=Hello%20world' -H 'accept: application/json'
```

#### Request URL

```bash
https://tools4devs.herokuapp.com/captcha/?text=Hello%20world
```

#### Response BODY

```bash
{
  "text": "Hello world",
  "url": "https://tools4devs.herokuapp.com/static/captcha.png"
}
```

---

## Text to MD5 SHA1 SHA256

#### CURL

```bash
curl -X 'GET' 'https://tools4devs.herokuapp.com/encrypt/?text=hello' -H 'accept: application/json'
```

#### Request URL

```bash
https://tools4devs.herokuapp.com/encrypt/?text=hello
```

#### Response BODY

```bash
{
  "text": "hello",
  "md5": "5d41402abc4b2a76b9719d911017c592",
  "sha256": "2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824",
  "sha1": "aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d"
}
```

---

### Lorem generator

#### CURL

```bash
curl -X 'GET' 'https://tools4devs.herokuapp.com/lorem/?words=10' -H 'accept: application/json'
```

#### Request URL

```bash
https://tools4devs.herokuapp.com/lorem/?words=10
```

#### Response BODY

```bash
{
  "words": 10,
  "lorem": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque "
}
```

---

### Random password generator

#### CURL

```bash
curl -X 'GET' 'https://tools4devs.herokuapp.com/password?size=10' -H 'accept: application/json'
```

#### Request URL

```bash
https://tools4devs.herokuapp.com/password/?size=10
```

#### Response BODY

```bash
{
  "size": 10,
  "password": "hO8-=dzR_q"
}
```

### Text to speech

#### CURL

```bash
curl -X 'GET' 'https://tools4devs.herokuapp.com/text2speech/?text=Hello%20world' -H 'accept: application/json'
```

#### Request URL

```bash
https://tools4devs.herokuapp.com/text2speech/?text=Hello%20world
```

#### Response BODY

```bash
{
  "text": "Hello world",
  "url": "https://tools4devs.herokuapp.com/static/text2speech.mp3"
}
```

---

### MyIP

#### CURL

```bash
curl -X 'GET' 'https://tools4devs.herokuapp.com/myip' -H 'accept: application/json'
```

#### Request URL

```bash
https://tools4devs.herokuapp.com/myip
```

#### Response BODY

```bash
{
  "ip": "127.0.1.1"
}
```

---
