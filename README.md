# Tennis Kata

## 環境需求

- php >= 7.2

## 使用方法

### 程式碼排版
```
composer fix
```

### 執行測試
```
composer test
```

## Test Case

### 測試分數

- 0:0 > Love All
- 1:0 > Fifteen Love 
- 2:0 > Thirty Love 
- 3:0 > Forty Love
- 0:1 > Love Fifteen
- 0:2 > Love Thirty
- 0:3 > Love Forty

### 測試平分

- 1:1 > Fifteen All
- 2:2 > Thirty All
- 3:3 > Deuce
- 4:4 > Deuce

### 測試 Advantage

- 4:3 > First Player Adv
- 5:4 > First player Adv
- 3:4 > Second Player Adv
- 4:5 > Second Player Adv

### 測試獲勝

- 5:3 > First Player Win with Deuce
- 4:0 > First Player Win wintout Deuce
- 3:5 > Second Player Win with Deuce
- 0:4 > Second Player Win wintout Deuce
