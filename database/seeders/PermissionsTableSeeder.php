<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_access',
            ],
            [
                'id'    => 33,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 34,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 35,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 36,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 37,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 38,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 39,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 40,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 41,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 42,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 43,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 44,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 45,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 46,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 47,
                'title' => 'currency_create',
            ],
            [
                'id'    => 48,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 49,
                'title' => 'currency_show',
            ],
            [
                'id'    => 50,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 51,
                'title' => 'currency_access',
            ],
            [
                'id'    => 52,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 53,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 54,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 55,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 56,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 57,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 58,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 59,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 60,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 61,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 62,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 63,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 64,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 65,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 66,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 67,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 68,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 69,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 70,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 71,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 72,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 73,
                'title' => 'client_create',
            ],
            [
                'id'    => 74,
                'title' => 'client_edit',
            ],
            [
                'id'    => 75,
                'title' => 'client_show',
            ],
            [
                'id'    => 76,
                'title' => 'client_delete',
            ],
            [
                'id'    => 77,
                'title' => 'client_access',
            ],
            [
                'id'    => 78,
                'title' => 'project_create',
            ],
            [
                'id'    => 79,
                'title' => 'project_edit',
            ],
            [
                'id'    => 80,
                'title' => 'project_show',
            ],
            [
                'id'    => 81,
                'title' => 'project_delete',
            ],
            [
                'id'    => 82,
                'title' => 'project_access',
            ],
            [
                'id'    => 83,
                'title' => 'note_create',
            ],
            [
                'id'    => 84,
                'title' => 'note_edit',
            ],
            [
                'id'    => 85,
                'title' => 'note_show',
            ],
            [
                'id'    => 86,
                'title' => 'note_delete',
            ],
            [
                'id'    => 87,
                'title' => 'note_access',
            ],
            [
                'id'    => 88,
                'title' => 'document_create',
            ],
            [
                'id'    => 89,
                'title' => 'document_edit',
            ],
            [
                'id'    => 90,
                'title' => 'document_show',
            ],
            [
                'id'    => 91,
                'title' => 'document_delete',
            ],
            [
                'id'    => 92,
                'title' => 'document_access',
            ],
            [
                'id'    => 93,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 94,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 95,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 96,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 97,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 98,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 99,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 100,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 101,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 102,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 103,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 104,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 105,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 106,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 107,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 108,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 109,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 110,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 111,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 112,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 113,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 114,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
