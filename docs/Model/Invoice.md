# # Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**authorizer_fid** | **int** |  | [optional]
**party_fid** | **int** |  |
**pay_method_fid** | **int** |  |
**pay_term_fid** | **int** |  |
**vat_fid** | **int** |  | [optional]
**person_role_fid** | **int** |  |
**invoice_date** | **\DateTime** |  |
**due_date** | **\DateTime** |  |
**modify_date** | **\DateTime** |  | [optional]
**invoice_num** | **int** |  |
**reminder_level** | **int** |  | [optional]
**free_invoice_num** | **string** |  | [optional]
**text** | **string** |  | [optional]
**payslip_code** | **string** |  | [optional]
**total_amount** | **float** |  |
**total_amount_fc** | **float** |  |
**exchange_rate** | **float** |  | [optional]
**is_authorized** | **bool** |  | [optional]
**no_reminders** | **bool** |  | [optional]
**remarks** | **string** |  | [optional]
**party_num** | **int** |  | [optional]
**party_name** | **string** |  | [optional]
**party_short_name** | **string** |  | [optional]
**pay_term_code** | **string** |  | [optional]
**account_code** | **string** |  | [optional]
**currency_code** | **string** |  | [optional]
**balance** | **float** |  | [optional]
**balance_fc** | **float** |  | [optional]
**bar_code** | **string** |  | [optional]
**current_reminder_level** | **int** |  | [optional]
**has_document** | **int** |  | [optional]
**current_reminder_date** | **\DateTime** |  | [optional]
**payment_postings** | [**\Topal\Client\Model\Posting[]**](Posting.md) |  | [optional]
**transaction** | [**\Topal\Client\Model\Transaction**](Transaction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
