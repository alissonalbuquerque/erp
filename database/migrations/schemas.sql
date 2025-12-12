CREATE TABLE suppliers (
    id              INTEGER PRIMARY KEY AUTOINCREMENT,
    name            VARCHAR(255) NOT NULL,
    document        VARCHAR(20),               -- CNPJ ou CPF
    email           VARCHAR(150),
    phone           VARCHAR(50),
    address         TEXT,
    bank_account    VARCHAR(255),              -- dados bancários simples
    created_at      DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at      DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    id          INTEGER PRIMARY KEY AUTOINCREMENT,
    name        VARCHAR(150) NOT NULL,
    type        VARCHAR(50),                   -- opcional: fixo, imposto, geral
    created_at  DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at  DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE cost_centers (
    id          INTEGER PRIMARY KEY AUTOINCREMENT,
    name        VARCHAR(150) NOT NULL,
    department  VARCHAR(150),
    created_at  DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at  DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE bank_accounts (
    id              INTEGER PRIMARY KEY AUTOINCREMENT,
    bank_name       VARCHAR(150) NOT NULL,
    agency          VARCHAR(20),
    account_number  VARCHAR(30),
    account_type    VARCHAR(30),              -- corrente, poupança, carteira virtual...
    created_at      DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at      DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE payables (
    id                  INTEGER PRIMARY KEY AUTOINCREMENT,
    supplier_id         INTEGER NOT NULL,
    category_id         INTEGER,
    cost_center_id      INTEGER,   
    description         VARCHAR(255) NOT NULL,
    document_number     VARCHAR(50),          -- número da nota ou fatura
    amount_original     DECIMAL(12,2) NOT NULL,
    amount_current      DECIMAL(12,2) NOT NULL,
    issue_date          DATE,
    due_date            DATE NOT NULL,
    payment_date        DATE,                 -- null se não pago
    status              VARCHAR(20) DEFAULT 'open',
    notes               TEXT,
    created_at          DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at          DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id),
    FOREIGN KEY (category_id) REFERENCES categories(id),
    FOREIGN KEY (cost_center_id) REFERENCES cost_centers(id)
);

CREATE TABLE payments (
    id                  INTEGER PRIMARY KEY AUTOINCREMENT,
    payable_id          INTEGER NOT NULL,
    bank_account_id     INTEGER,        
    payment_date        DATE NOT NULL,
    amount_paid         DECIMAL(12,2) NOT NULL,
    payment_method      VARCHAR(50),        -- PIX, boleto, transferência, cartão...
    transaction_ref     VARCHAR(150),
    notes               TEXT,
    created_at          DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at          DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (payable_id) REFERENCES payables(id),
    FOREIGN KEY (bank_account_id) REFERENCES bank_accounts(id)
);