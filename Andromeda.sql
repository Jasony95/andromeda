use ics325fa2032;

create table Customer (
    CustomerID Int unsigned not null auto_increment,
    First_name Char(50) not null,
    Middle_name Char(50),
    Last_name Char(50) not null,
    Birthdate date,
    Address_line_1 Char(100) not null,
    Address_line_2 Char(50),
    City Char(50) not null,
    State Char(50) not null,
    Zipcode Int not null,
    Country Char(50) not null,
    Phone_number int,
    Email Char(50),
    Registered_date Date not null,
    Primary Key (CustomerID)
);

create table Account (
    AccountID Int unsigned not null auto_increment,
    CustomerID Int unsigned not null,
    Account_type Char(20) not null,
    Created_date Date not null,
    Type_buyer Char(10) not null,
    Type_seller Char(10) not null,
    Type_renter Char(10) not null,
    Type_lessor Char(10) not null,
    Deleted_date Date,
    Banned_date Date,

    Primary Key (AccountID),
    Foreign Key (CustomerID) references Customer(CustomerID)
);

create table Orders (
    OrderID Int unsigned not null auto_increment,
    CustomerID Int unsigned not null,
    ItemID Int unsigned not null,
    Order_type Char(30) not null,
    Paid Char(5) not null,
    Ordered_date Date not null,
    Shipped Char(10) not null,
    Shipped_date Date,
    Delivered Char(10) not null,
    Delivered_date Date,
    Returned Char(10) not null,
    Returned_dat Date,
    Primary Key (OrderID),
    Foreign Key (CustomerID) References Customer(CustomerID)
);

create table Item (
    ItemID Int unsigned not null auto_increment,
    CustomerID Int unsigned not null,
    Name Char(150) not null,
    Item_type Char(100) not null,
    Description Varchar(7500) not null,
    Image Varchar(500) not null,
    Date_posted Date not null,
    Buy_price Float(6,2) not null,
    Rent_price Float(6,2),
    Primary Key (ItemID),
    Foreign Key (CustomerID) References Customer(CustomerID)
);

create table Order_item (
    ItemID Int unsigned not null,
    OrderID Int unsigned not null,
    Quantity Int not null,
    Primary Key (ItemID, OrderID),
    Foreign Key (ItemID) References Item(ItemID),
    Foreign Key (OrderID) References Orders(OrderID)
);