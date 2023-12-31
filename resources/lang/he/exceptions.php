<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Exception Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in Exceptions thrown throughout the system.
    | Regardless where it is placed, a button can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'roles' => [
                'already_exists'    => 'כבר יש תפקיד בשם הזה. נסו שם אחר.',
                'cant_delete_admin' => 'אי אפשר למחוק את התפקיד "מנהל".',
                'create_error'      => 'הייתה בעיה ביצירת התפקיד. אנא נסו שוב.',
                'delete_error'      => 'הייתה בעיה במחיקת התפקיד. אנא נסו שוב.',
                'has_users'         => 'אי אפשר למחוק תפקיד שמשוייכים אליו משתמשים.',
                'needs_permission'  => 'חייבים לבחור לפחות הרשאה אחת לתפקיד.',
                'not_found'         => 'אין תפקיד כזה.',
                'update_error'      => 'הייתה בעיה בעדכון התפקיד. אנא נסו שוב.',
            ],

            'users' => [
                'already_confirmed'       => 'המשתמש הזה כבר אומת.',
                'cant_confirm'            => 'הייתה בעיה באימות חשבון המשתמש.',
                'cant_deactivate_self'    => 'אי אפשר לכבות את החשבון של עצמך.',
                'cant_delete_admin'       => 'אי אפשר למחוק את המנהל הראשי.',
                'cant_delete_self'        => 'אי אפשר למחוק את עצמך.',
                'cant_delete_own_session' => 'אי אפשר למחוק את הסשן של עצמך.',
                'cant_restore'            => 'אי אפשר לשחזר את המשתמש הזה, הוא לא מחוק.',
                'cant_unconfirm_admin'    => 'אי אפשר לבטל את האימות של המנהל הראשי.',
                'cant_unconfirm_self'     => 'אי אפשר לבטל את האימות של עצמך.',
                'create_error'            => 'הייתה בעיה ביצירת המשתמש. אנא נסו שוב.',
                'delete_error'            => 'הייתה בעיה במחיקת המשתמש. אנא נסו שוב.',
                'delete_first'            => 'יש למחוק את המשתמש מחיקה רגילה לפני שמוחקים אותו לצמיתות.',
                'email_error'             => 'כתובת המייל הזו שייכת למשתמש אחר.',
                'mark_error'              => 'הייתה בעיה בעדכון המשתמש. אנא נסו שוב.',
                'not_confirmed'           => 'המשתמש הזה לא מאומת.',
                'not_found'               => 'המשתמש לא נמצא במערכת.',
                'restore_error'           => 'הייתה בעיה בשחזור המשתמש. אנא נסו שוב.',
                'role_needed_create'      => 'משתמש חייב לפחות תפקיד אחד.',
                'role_needed'             => 'משתמש חייב לפחות תפקיד אחד.',
                'session_wrong_driver'    => 'כדי להשתמש בתכונה הזו, צריך שה-session driver יהיה database',
                'social_delete_error'     => 'הייתה בעיה בהסרת הפרופיל החברתי של המשתמש.',
                'update_error'            => 'הייתה בעיה בעדכון המשתמש. אנא נסו שוב.',
                'update_password_error'   => 'הייתה בעיה בעדכון סיסמת המשתמש. אנא נסו שוב.',
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'confirmation' => [
                'already_confirmed' => 'החשבון שלך כבר מאומת.',
                'confirm'           => 'אמת/י את החשבון שלך!',
                'created_confirm'   => 'החשבון שלך נוצר בהצלחה. שלחנו מייל אימות לכתובת שלך.',
                'created_pending'   => 'החשבון שלך נוצר בהצלחה והוא ממתין לאישור מנהל מערכת. מייל יישלח לכתובת שלך כשהחשבון יאושר.',
                'mismatch'          => 'קוד האימות לא נכון.',
                'not_found'         => 'קוד האימות לא קיים.',
                'pending'           => 'החשבון שלך בהמתנה לאישור.',
                'resend'            => 'החשבון שלך לא אומת. יש להקליק על הקישור לאימות בדוא"ל שלך, או <a href=":url"> להקליק כאן</a> כדי לשלוח מייל אימות חדש.',
                'success'           => 'החשבון שלך אומת בהצלחה!',
                'resent'            => 'מייל אימות חדש נשלח לכתובת שלך.',
            ],

            'deactivated' => 'החשבון שלך בוטל.',
            'email_taken' => 'כתובת המייל הזו כבר משוייכת למשתמש אחר.',

            'password' => [
                'change_mismatch' => 'זו לא הסיסמה הישנה שלך.',
                'reset_problem'   => 'הייתה בעיה באיפוס הסיסמה. אנא נסו שוב מאוחר יותר.',
            ],

            'registration_disabled' => 'ההרשמה סגורה.',
        ],
    ],
];
