<?php

namespace Augwa\QuickBooks\Enum;

/**
 * Product: QBO
 * Enumeration of Account sub-types used to specifically categorize
 * account types in QuickBooks Online.
 *
 * Class AccountSubTypeEnum
 * @package Augwa\QuickBooks\Enum
 */
class AccountSubTypeEnum
{

    const ACCOUNTS_PAYABLE = 'AccountsPayable';
    const ACCOUNTS_RECEIVABLE = 'AccountsReceivable';
    const ACCUMULATED_ADJUSTMENT = 'AccumulatedAdjustment';
    const ACCUMULATED_AMORTIZATION = 'AccumulatedAmortization';
    const ACCUMULATED_AMORTIZATION_OF_OTHER_ASSETS = 'AccumulatedAmortizationOfOtherAssets';
    const ACCUMULATED_DEPLETION = 'AccumulatedDepletion';
    const ACCUMULATED_DEPRECIATION = 'AccumulatedDepreciation';
    const ADVERTISING_PROMOTIONAL = 'AdvertisingPromotional';
    const ALLOWANCE_FOR_BAD_DEBTS = 'AllowanceForBadDebts';
    const AMORTIZATION = 'Amortization';
    const AUTO = 'Auto';
    const BAD_DEBTS = 'BadDebts';
    const BANK_CHARGES = 'BankCharges';
    const BUILDINGS = 'Buildings';
    const CASH_ON_HAND = 'CashOnHand';
    const CHARITABLE_CONTRIBUTIONS = 'CharitableContributions';
    const CHECKING = 'Checking';
    const COMMON_STOCK = 'CommonStock';
    const COST_OF_LABOR = 'CostOfLabor';
    const COST_OF_LABOR_COS = 'CostOfLaborCos';
    const CREDIT_CARD = 'CreditCard';
    const DEPLETABLE_ASSETS = 'DepletableAssets';
    const DEPRECIATION = 'Depreciation';
    const DEVELOPMENT_COSTS = 'DevelopmentCosts';
    const DIRECT_DEPOSIT_PAYABLE = 'DirectDepositPayable';
    const DISCOUNTS_REFUNDS_GIVEN = 'DiscountsRefundsGiven';
    const DIVIDEND_INCOME = 'DividendIncome';
    const DUES_SUBSCRIPTIONS = 'DuesSubscriptions';
    const EMPLOYEE_CASH_ADVANCES = 'EmployeeCashAdvances';
    const ENTERTAINMENT = 'Entertainment';
    const ENTERTAINMENT_MEALS = 'EntertainmentMeals';
    const EQUIPMENT_RENTAL = 'EquipmentRental';
    const EQUIPMENT_RENTAL_COS = 'EquipmentRentalCos';
    const EXCHANGE_GAIN_OR_LOSS = 'ExchangeGainOrLoss';
    const FEDERAL_INCOME_TAX_PAYABLE = 'FederalIncomeTaxPayable';
    const FURNITURE_AND_FIXTURES = 'FurnitureAndFixtures';
    const GLOBAL_TAX_EXPENSE = 'GlobalTaxExpense';
    const GLOBAL_TAX_PAYABLE = 'GlobalTaxPayable';
    const GLOBAL_TAX_SUSPENSE = 'GlobalTaxSuspense';
    const GOODWILL = 'Goodwill';
    const INSURANCE = 'Insurance';
    const INSURANCE_PAYABLE = 'InsurancePayable';
    const INTANGIBLE_ASSETS = 'IntangibleAssets';
    const INTEREST_EARNED = 'InterestEarned';
    const INTEREST_PAID = 'InterestPaid';
    const INVENTORY = 'Inventory';
    const INVESTMENT_MORTGAGE_REAL_ESTATE_LOANS = 'Investment_MortgageRealEstateLoans';
    const INVESTMENT_OTHER = 'Investment_Other';
    const INVESTMENT_TAX_EXEMPT_SECURITIES = 'Investment_TaxExemptSecurities';
    const INVESTMENT_USGOVERNMENT_OBLIGATIONS = 'Investment_USGovernmentObligations';
    const LAND = 'Land';
    const LEASE_BUYOUT = 'LeaseBuyout';
    const LEASEHOLD_IMPROVEMENTS = 'LeaseholdImprovements';
    const LEGAL_PROFESSIONAL_FEES = 'LegalProfessionalFees';
    const LICENSES = 'Licenses';
    const LINE_OF_CREDIT = 'LineOfCredit';
    const LOAN_PAYABLE = 'LoanPayable';
    const LOANS_TO_OFFICERS = 'LoansToOfficers';
    const LOANS_TO_OTHERS = 'LoansToOthers';
    const LOANS_TO_STOCKHOLDERS = 'LoansToStockholders';
    const MACHINERY_AND_EQUIPMENT = 'MachineryAndEquipment';
    const MONEY_MARKET = 'MoneyMarket';
    const NON_PROFIT_INCOME = 'NonProfitIncome';
    const NOTES_PAYABLE = 'NotesPayable';
    const OFFICE_GENERAL_ADMINISTRATIVE_EXPENSES = 'OfficeGeneralAdministrativeExpenses';
    const OPENING_BALANCE_EQUITY = 'OpeningBalanceEquity';
    const ORGANIZATIONAL_COSTS = 'OrganizationalCosts';
    const OTHER_COSTS_OF_SERVICE_COS = 'OtherCostsOfServiceCos';
    const OTHER_CURRENT_ASSETS = 'OtherCurrentAssets';
    const OTHER_CURRENT_LIABILITIES = 'OtherCurrentLiabilities';
    const OTHER_FIXED_ASSETS = 'OtherFixedAssets';
    const OTHER_INVESTMENT_INCOME = 'OtherInvestmentIncome';
    const OTHER_LONG_TERM_ASSETS = 'OtherLongTermAssets';
    const OTHER_LONG_TERM_LIABILITIES = 'OtherLongTermLiabilities';
    const OTHER_MISCELLANEOUS_EXPENSE = 'OtherMiscellaneousExpense';
    const OTHER_MISCELLANEOUS_INCOME = 'OtherMiscellaneousIncome';
    const OTHER_MISCELLANEOUS_SERVICE_COST = 'OtherMiscellaneousServiceCost';
    const OTHER_PRIMARY_INCOME = 'OtherPrimaryIncome';
    const OWNERS_EQUITY = 'OwnersEquity';
    const PAID_IN_CAPITAL_OR_SURPLUS = 'PaidInCapitalOrSurplus';
    const PARTNER_CONTRIBUTIONS = 'PartnerContributions';
    const PARTNER_DISTRIBUTIONS = 'PartnerDistributions';
    const PARTNERS_EQUITY = 'PartnersEquity';
    const PAYROLL_CLEARING = 'PayrollClearing';
    const PAYROLL_EXPENSES = 'PayrollExpenses';
    const PAYROLL_TAX_PAYABLE = 'PayrollTaxPayable';
    const PENALTIES_SETTLEMENTS = 'PenaltiesSettlements';
    const PREFERRED_STOCK = 'PreferredStock';
    const PREPAID_EXPENSES = 'PrepaidExpenses';
    const PREPAID_EXPENSES_PAYABLE = 'PrepaidExpensesPayable';
    const PROMOTIONAL_MEALS = 'PromotionalMeals';
    const RENT_OR_LEASE_OF_BUILDINGS = 'RentOrLeaseOfBuildings';
    const RENTS_HELD_IN_TRUST = 'RentsHeldInTrust';
    const RENTS_IN_TRUST_LIABILITY = 'RentsInTrustLiability';
    const REPAIR_MAINTENANCE = 'RepairMaintenance';
    const RETAINAGE = 'Retainage';
    const RETAINED_EARNINGS = 'RetainedEarnings';
    const SALES_OF_PRODUCT_INCOME = 'SalesOfProductIncome';
    const SALES_TAX_PAYABLE = 'SalesTaxPayable';
    const SAVINGS = 'Savings';
    const SECURITY_DEPOSITS = 'SecurityDeposits';
    const SERVICE_FEE_INCOME = 'ServiceFeeIncome';
    const SHAREHOLDER_NOTES_PAYABLE = 'ShareholderNotesPayable';
    const SHIPPING_FREIGHT_DELIVERY = 'ShippingFreightDelivery';
    const SHIPPING_FREIGHT_DELIVERY_COS = 'ShippingFreightDeliveryCos';
    const STATE_LOCAL_INCOME_TAX_PAYABLE = 'StateLocalIncomeTaxPayable';
    const SUPPLIES_MATERIALS = 'SuppliesMaterials';
    const SUPPLIES_MATERIALS_COGS = 'SuppliesMaterialsCogs';
    const TAXES_PAID = 'TaxesPaid';
    const TAX_EXEMPT_INTEREST = 'TaxExemptInterest';
    const TRAVEL = 'Travel';
    const TRAVEL_MEALS = 'TravelMeals';
    const TREASURY_STOCK = 'TreasuryStock';
    const TRUST_ACCOUNTS = 'TrustAccounts';
    const TRUST_ACCOUNTS_LIABILITIES = 'TrustAccountsLiabilities';
    const UNDEPOSITED_FUNDS = 'UndepositedFunds';
    const UTILITIES = 'Utilities';
    const VEHICLES = 'Vehicles';

}