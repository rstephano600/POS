<svg width="1600" height="2000" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <style>
      .entity-box { fill: #f8f9fa; stroke: #2563eb; stroke-width: 2; }
      .entity-title { font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; fill: #1e40af; }
      .entity-field { font-family: Arial, sans-serif; font-size: 11px; fill: #374151; }
      .pk-field { font-weight: bold; fill: #dc2626; }
      .fk-field { font-style: italic; fill: #059669; }
      .relationship-line { stroke: #6b7280; stroke-width: 1.5; fill: none; }
      .relationship-label { font-family: Arial, sans-serif; font-size: 10px; fill: #4b5563; }
      .section-title { font-family: Arial, sans-serif; font-size: 16px; font-weight: bold; fill: #1f2937; }
    </style>
  </defs>
  
  <!-- Background -->
  <rect width="1600" height="2000" fill="#ffffff"/>
  
  <!-- Title -->
  <text x="800" y="30" text-anchor="middle" class="section-title" style="font-size: 20px;">Pharmacy Management System - Entity Relationship Diagram</text>
  
  <!-- Section Labels -->
  <text x="50" y="70" class="section-title">System Administration</text>
  <text x="550" y="70" class="section-title">Inventory Management</text>
  <text x="1100" y="70" class="section-title">Sales & Customer</text>
  <text x="50" y="1200" class="section-title">Procurement & Suppliers</text>
  <text x="550" y="1200" class="section-title">Additional Services</text>
  <text x="1100" y="1200" class="section-title">Audit & Compliance</text>
  
  <!-- PHARMACY Entity -->
  <rect x="50" y="90" width="180" height="160" class="entity-box"/>
  <text x="140" y="110" text-anchor="middle" class="entity-title">PHARMACY</text>
  <text x="60" y="130" class="entity-field pk-field">pharmacy_id (PK)</text>
  <text x="60" y="145" class="entity-field">name</text>
  <text x="60" y="160" class="entity-field">license_number</text>
  <text x="60" y="175" class="entity-field">location</text>
  <text x="60" y="190" class="entity-field">working_hours</text>
  <text x="60" y="205" class="entity-field">contact_phone</text>
  <text x="60" y="220" class="entity-field">license_expiry</text>
  <text x="60" y="235" class="entity-field">is_active</text>
  
  <!-- USERS Entity -->
  <rect x="50" y="280" width="180" height="180" class="entity-box"/>
  <text x="140" y="300" text-anchor="middle" class="entity-title">USERS</text>
  <text x="60" y="320" class="entity-field pk-field">user_id (PK)</text>
  <text x="60" y="335" class="entity-field">username</text>
  <text x="60" y="350" class="entity-field">password_hash</text>
  <text x="60" y="365" class="entity-field">full_name</text>
  <text x="60" y="380" class="entity-field">email</text>
  <text x="60" y="395" class="entity-field">phone</text>
  <text x="60" y="410" class="entity-field">role</text>
  <text x="60" y="425" class="entity-field fk-field">pharmacy_id (FK)</text>
  <text x="60" y="440" class="entity-field">is_active</text>
  
  <!-- PHARMACIST_IN_CHARGE Entity -->
  <rect x="280" y="280" width="200" height="140" class="entity-box"/>
  <text x="380" y="300" text-anchor="middle" class="entity-title">PHARMACIST_IN_CHARGE</text>
  <text x="290" y="320" class="entity-field pk-field">pharmacist_id (PK)</text>
  <text x="290" y="335" class="entity-field fk-field">user_id (FK)</text>
  <text x="290" y="350" class="entity-field fk-field">pharmacy_id (FK)</text>
  <text x="290" y="365" class="entity-field">license_number</text>
  <text x="290" y="380" class="entity-field">license_expiry</text>
  <text x="290" y="395" class="entity-field">appointment_date</text>
  <text x="290" y="410" class="entity-field">is_current</text>
  
  <!-- MEDICINE_CATEGORIES Entity -->
  <rect x="550" y="90" width="180" height="120" class="entity-box"/>
  <text x="640" y="110" text-anchor="middle" class="entity-title">MEDICINE_CATEGORIES</text>
  <text x="560" y="130" class="entity-field pk-field">category_id (PK)</text>
  <text x="560" y="145" class="entity-field">category_name</text>
  <text x="560" y="160" class="entity-field">description</text>
  <text x="560" y="175" class="entity-field">is_active</text>
  <text x="560" y="190" class="entity-field">created_at</text>
  
  <!-- MEDICINES Entity -->
  <rect x="550" y="240" width="180" height="220" class="entity-box"/>
  <text x="640" y="260" text-anchor="middle" class="entity-title">MEDICINES</text>
  <text x="560" y="280" class="entity-field pk-field">medicine_id (PK)</text>
  <text x="560" y="295" class="entity-field">name</text>
  <text x="560" y="310" class="entity-field">generic_name</text>
  <text x="560" y="325" class="entity-field">brand_name</text>
  <text x="560" y="340" class="entity-field fk-field">category_id (FK)</text>
  <text x="560" y="355" class="entity-field">strength</text>
  <text x="560" y="370" class="entity-field">form</text>
  <text x="560" y="385" class="entity-field">prescription_type</text>
  <text x="560" y="400" class="entity-field">storage_type</text>
  <text x="560" y="415" class="entity-field">unit_price</text>
  <text x="560" y="430" class="entity-field">reorder_level</text>
  <text x="560" y="445" class="entity-field">is_active</text>
  
  <!-- MEDICINE_BATCHES Entity -->
  <rect x="780" y="240" width="180" height="240" class="entity-box"/>
  <text x="870" y="260" text-anchor="middle" class="entity-title">MEDICINE_BATCHES</text>
  <text x="790" y="280" class="entity-field pk-field">batch_id (PK)</text>
  <text x="790" y="295" class="entity-field fk-field">medicine_id (FK)</text>
  <text x="790" y="310" class="entity-field fk-field">supplier_id (FK)</text>
  <text x="790" y="325" class="entity-field">batch_number</text>
  <text x="790" y="340" class="entity-field">expiry_date</text>
  <text x="790" y="355" class="entity-field">manufacture_date</text>
  <text x="790" y="370" class="entity-field">quantity_received</text>
  <text x="790" y="385" class="entity-field">quantity_available</text>
  <text x="790" y="400" class="entity-field">cost_price</text>
  <text x="790" y="415" class="entity-field">selling_price</text>
  <text x="790" y="430" class="entity-field">received_date</text>
  <text x="790" y="445" class="entity-field fk-field">received_by (FK)</text>
  <text x="790" y="460" class="entity-field">is_expired</text>
  
  <!-- SUPPLIERS Entity -->
  <rect x="550" y="500" width="180" height="180" class="entity-box"/>
  <text x="640" y="520" text-anchor="middle" class="entity-title">SUPPLIERS</text>
  <text x="560" y="540" class="entity-field pk-field">supplier_id (PK)</text>
  <text x="560" y="555" class="entity-field">name</text>
  <text x="560" y="570" class="entity-field">contact_person</text>
  <text x="560" y="585" class="entity-field">phone</text>
  <text x="560" y="600" class="entity-field">email</text>
  <text x="560" y="615" class="entity-field">address</text>
  <text x="560" y="630" class="entity-field">credit_days</text>
  <text x="560" y="645" class="entity-field">credit_limit</text>
  <text x="560" y="660" class="entity-field">is_active</text>
  
  <!-- CUSTOMERS Entity -->
  <rect x="1100" y="90" width="180" height="200" class="entity-box"/>
  <text x="1190" y="110" text-anchor="middle" class="entity-title">CUSTOMERS</text>
  <text x="1110" y="130" class="entity-field pk-field">customer_id (PK)</text>
  <text x="1110" y="145" class="entity-field">name</text>
  <text x="1110" y="160" class="entity-field">phone</text>
  <text x="1110" y="175" class="entity-field">email</text>
  <text x="1110" y="190" class="entity-field">address</text>
  <text x="1110" y="205" class="entity-field">date_of_birth</text>
  <text x="1110" y="220" class="entity-field">gender</text>
  <text x="1110" y="235" class="entity-field">insurance_number</text>
  <text x="1110" y="250" class="entity-field">insurance_provider</text>
  <text x="1110" y="265" class="entity-field">customer_type</text>
  <text x="1110" y="280" class="entity-field">created_at</text>
  
  <!-- PRESCRIPTIONS Entity -->
  <rect x="1320" y="90" width="200" height="200" class="entity-box"/>
  <text x="1420" y="110" text-anchor="middle" class="entity-title">PRESCRIPTIONS</text>
  <text x="1330" y="130" class="entity-field pk-field">prescription_id (PK)</text>
  <text x="1330" y="145" class="entity-field">prescription_number</text>
  <text x="1330" y="160" class="entity-field fk-field">customer_id (FK)</text>
  <text x="1330" y="175" class="entity-field">doctor_name</text>
  <text x="1330" y="190" class="entity-field">doctor_license</text>
  <text x="1330" y="205" class="entity-field">referring_facility</text>
  <text x="1330" y="220" class="entity-field">prescription_date</text>
  <text x="1330" y="235" class="entity-field">diagnosis</text>
  <text x="1330" y="250" class="entity-field">status</text>
  <text x="1330" y="265" class="entity-field fk-field">dispensed_by (FK)</text>
  <text x="1330" y="280" class="entity-field">dispensed_at</text>
  
  <!-- SALES Entity -->
  <rect x="1100" y="320" width="180" height="200" class="entity-box"/>
  <text x="1190" y="340" text-anchor="middle" class="entity-title">SALES</text>
  <text x="1110" y="360" class="entity-field pk-field">sale_id (PK)</text>
  <text x="1110" y="375" class="entity-field">sale_number</text>
  <text x="1110" y="390" class="entity-field fk-field">customer_id (FK)</text>
  <text x="1110" y="405" class="entity-field fk-field">prescription_id (FK)</text>
  <text x="1110" y="420" class="entity-field fk-field">cashier_id (FK)</text>
  <text x="1110" y="435" class="entity-field">sale_date</text>
  <text x="1110" y="450" class="entity-field">subtotal</text>
  <text x="1110" y="465" class="entity-field">tax_amount</text>
  <text x="1110" y="480" class="entity-field">total_amount</text>
  <text x="1110" y="495" class="entity-field">sale_type</text>
  <text x="1110" y="510" class="entity-field">status</text>
  
  <!-- SALE_ITEMS Entity -->
  <rect x="1320" y="320" width="180" height="160" class="entity-box"/>
  <text x="1410" y="340" text-anchor="middle" class="entity-title">SALE_ITEMS</text>
  <text x="1330" y="360" class="entity-field pk-field">sale_item_id (PK)</text>
  <text x="1330" y="375" class="entity-field fk-field">sale_id (FK)</text>
  <text x="1330" y="390" class="entity-field fk-field">medicine_id (FK)</text>
  <text x="1330" y="405" class="entity-field fk-field">batch_id (FK)</text>
  <text x="1330" y="420" class="entity-field">quantity</text>
  <text x="1330" y="435" class="entity-field">unit_price</text>
  <text x="1330" y="450" class="entity-field">total_price</text>
  <text x="1330" y="465" class="entity-field">discount_amount</text>
  
  <!-- PAYMENTS Entity -->
  <rect x="1100" y="550" width="180" height="180" class="entity-box"/>
  <text x="1190" y="570" text-anchor="middle" class="entity-title">PAYMENTS</text>
  <text x="1110" y="590" class="entity-field pk-field">payment_id (PK)</text>
  <text x="1110" y="605" class="entity-field fk-field">sale_id (FK)</text>
  <text x="1110" y="620" class="entity-field">amount</text>
  <text x="1110" y="635" class="entity-field">payment_method</text>
  <text x="1110" y="650" class="entity-field">payment_reference</text>
  <text x="1110" y="665" class="entity-field">mobile_money_number</text>
  <text x="1110" y="680" class="entity-field">payment_status</text>
  <text x="1110" y="695" class="entity-field fk-field">processed_by (FK)</text>
  <text x="1110" y="710" class="entity-field">payment_date</text>
  
  <!-- PURCHASE_ORDERS Entity -->
  <rect x="50" y="1240" width="200" height="180" class="entity-box"/>
  <text x="150" y="1260" text-anchor="middle" class="entity-title">PURCHASE_ORDERS</text>
  <text x="60" y="1280" class="entity-field pk-field">purchase_order_id (PK)</text>
  <text x="60" y="1295" class="entity-field">po_number</text>
  <text x="60" y="1310" class="entity-field fk-field">supplier_id (FK)</text>
  <text x="60" y="1325" class="entity-field">order_date</text>
  <text x="60" y="1340" class="entity-field">expected_delivery</text>
  <text x="60" y="1355" class="entity-field">total_amount</text>
  <text x="60" y="1370" class="entity-field">status</text>
  <text x="60" y="1385" class="entity-field fk-field">ordered_by (FK)</text>
  <text x="60" y="1400" class="entity-field fk-field">approved_by (FK)</text>
  
  <!-- STOCK_ADJUSTMENTS Entity -->
  <rect x="280" y="1240" width="180" height="180" class="entity-box"/>
  <text x="370" y="1260" text-anchor="middle" class="entity-title">STOCK_ADJUSTMENTS</text>
  <text x="290" y="1280" class="entity-field pk-field">adjustment_id (PK)</text>
  <text x="290" y="1295" class="entity-field fk-field">batch_id (FK)</text>
  <text x="290" y="1310" class="entity-field fk-field">medicine_id (FK)</text>
  <text x="290" y="1325" class="entity-field">adjustment_type</text>
  <text x="290" y="1340" class="entity-field">quantity_adjusted</text>
  <text x="290" y="1355" class="entity-field">reason</text>
  <text x="290" y="1370" class="entity-field fk-field">adjusted_by (FK)</text>
  <text x="290" y="1385" class="entity-field fk-field">approved_by (FK)</text>
  <text x="290" y="1400" class="entity-field">adjustment_date</text>
  
  <!-- DIAGNOSTIC_TESTS Entity -->
  <rect x="550" y="1240" width="180" height="140" class="entity-box"/>
  <text x="640" y="1260" text-anchor="middle" class="entity-title">DIAGNOSTIC_TESTS</text>
  <text x="560" y="1280" class="entity-field pk-field">test_id (PK)</text>
  <text x="560" y="1295" class="entity-field">test_name</text>
  <text x="560" y="1310" class="entity-field">test_code</text>
  <text x="560" y="1325" class="entity-field">price</text>
  <text x="560" y="1340" class="entity-field">description</text>
  <text x="560" y="1355" class="entity-field">is_active</text>
  
  <!-- CUSTOMER_TESTS Entity -->
  <rect x="780" y="1240" width="180" height="160" class="entity-box"/>
  <text x="870" y="1260" text-anchor="middle" class="entity-title">CUSTOMER_TESTS</text>
  <text x="790" y="1280" class="entity-field pk-field">customer_test_id (PK)</text>
  <text x="790" y="1295" class="entity-field fk-field">customer_id (FK)</text>
  <text x="790" y="1310" class="entity-field fk-field">test_id (FK)</text>
  <text x="790" y="1325" class="entity-field fk-field">sale_id (FK)</text>
  <text x="790" y="1340" class="entity-field">test_date</text>
  <text x="790" y="1355" class="entity-field">results</text>
  <text x="790" y="1370" class="entity-field fk-field">performed_by (FK)</text>
  <text x="790" y="1385" class="entity-field">created_at</text>
  
  <!-- AUDIT_LOGS Entity -->
  <rect x="1100" y="1240" width="180" height="180" class="entity-box"/>
  <text x="1190" y="1260" text-anchor="middle" class="entity-title">AUDIT_LOGS</text>
  <text x="1110" y="1280" class="entity-field pk-field">log_id (PK)</text>
  <text x="1110" y="1295" class="entity-field fk-field">user_id (FK)</text>
  <text x="1110" y="1310" class="entity-field">table_name</text>
  <text x="1110" y="1325" class="entity-field">action</text>
  <text x="1110" y="1340" class="entity-field">record_id</text>
  <text x="1110" y="1355" class="entity-field">old_values</text>
  <text x="1110" y="1370" class="entity-field">new_values</text>
  <text x="1110" y="1385" class="entity-field">ip_address</text>
  <text x="1110" y="1400" class="entity-field">created_at</text>
  
  <!-- SYSTEM_SETTINGS Entity -->
  <rect x="1320" y="1240" width="180" height="140" class="entity-box"/>
  <text x="1410" y="1260" text-anchor="middle" class="entity-title">SYSTEM_SETTINGS</text>
  <text x="1330" y="1280" class="entity-field pk-field">setting_id (PK)</text>
  <text x="1330" y="1295" class="entity-field">setting_key</text>
  <text x="1330" y="1310" class="entity-field">setting_value</text>
  <text x="1330" y="1325" class="entity-field">description</text>
  <text x="1330" y="1340" class="entity-field fk-field">updated_by (FK)</text>
  <text x="1330" y="1355" class="entity-field">updated_at</text>
  
  <!-- Relationship Lines -->
  <!-- PHARMACY to USERS -->
  <line x1="140" y1="250" x2="140" y2="280" class="relationship-line"/>
  <text x="145" y="265" class="relationship-label">1:N</text>
  
  <!-- USERS to PHARMACIST_IN_CHARGE -->
  <line x1="230" y1="360" x2="280" y2="340" class="relationship-line"/>
  <text x="255" y="350" class="relationship-label">1:1</text>
  
  <!-- MEDICINE_CATEGORIES to MEDICINES -->
  <line x1="640" y1="210" x2="640" y2="240" class="relationship-line"/>
  <text x="645" y="225" class="relationship-label">1:N</text>
  
  <!-- MEDICINES to MEDICINE_BATCHES -->
  <line x1="730" y1="350" x2="780" y2="350" class="relationship-line"/>
  <text x="755" y="345" class="relationship-label">1:N</text>
  
  <!-- SUPPLIERS to MEDICINE_BATCHES -->
  <line x1="720" y1="520" x2="850" y2="480" class="relationship-line"/>
  <text x="785" y="500" class="relationship-label">1:N</text>
  
  <!-- CUSTOMERS to PRESCRIPTIONS -->
  <line x1="1280" y1="170" x2="1320" y2="170" class="relationship-line"/>
  <text x="1300" y="165" class="relationship-label">1:N</text>
  
  <!-- CUSTOMERS to SALES -->
  <line x1="1190" y1="290" x2="1190" y2="320" class="relationship-line"/>
  <text x="1195" y="305" class="relationship-label">1:N</text>
  
  <!-- PRESCRIPTIONS to SALES -->
  <line x1="1400" y1="290" x2="1250" y2="380" class="relationship-line"/>
  <text x="1325" y="335" class="relationship-label">1:1</text>
  
  <!-- SALES to SALE_ITEMS -->
  <line x1="1280" y1="420" x2="1320" y2="400" class="relationship-line"/>
  <text x="1300" y="410" class="relationship-label">1:N</text>
  
  <!-- SALES to PAYMENTS -->
  <line x1="1190" y1="520" x2="1190" y2="550" class="relationship-line"/>
  <text x="1195" y="535" class="relationship-label">1:N</text>
  
  <!-- SUPPLIERS to PURCHASE_ORDERS -->
  <line x1="550" y1="590" x2="250" y2="1330" class="relationship-line"/>
  <text x="400" y="960" class="relationship-label">1:N</text>
  
  <!-- DIAGNOSTIC_TESTS to CUSTOMER_TESTS -->
  <line x1="730" y1="1310" x2="780" y2="1310" class="relationship-line"/>
  <text x="755" y="1305" class="relationship-label">1:N</text>
  
  <!-- USERS to AUDIT_LOGS -->
  <line x1="230" y1="380" x2="1100" y2="1340" class="relationship-line"/>
  <text x="665" y="860" class="relationship-label">1:N</text>
  
  <!-- Legend -->
  <rect x="50" y="1500" width="300" height="120" fill="#f3f4f6" stroke="#d1d5db" stroke-width="1"/>
  <text x="60" y="1520" class="section-title">Legend</text>
  <text x="60" y="1540" class="entity-field pk-field">Primary Key (PK)</text>
  <text x="60" y="1555" class="entity-field fk-field">Foreign Key (FK)</text>
  <text x="60" y="1570" class="entity-field">Regular Field</text>
  <line x1="60" y1="1585" x2="100" y2="1585" class="relationship-line"/>
  <text x="110" y="1590" class="relationship-label">Relationship (1:N, 1:1)</text>
  
  <!-- Footer -->
  <text x="800" y="1950" text-anchor="middle" style="font-family: Arial, sans-serif; font-size: 12px; fill: #6b7280;">
    Pharmacy Management System ERD - Generated for Database Design
  </text>
</svg>