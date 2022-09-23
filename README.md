![โลโก้เว็บบอร์ด](https://github.com/Nasz/DiscuzX/blob/master/upload/static/image/common/logo.svg)<br />
เวอร์ชั่นภาษาไทยของโปรแกรมเว็บบอร์ดสำเร็จรูป "ดิสคัซ!สิบ"

## จากต้นฉบับเวอร์ชั่น 3.5 เบต้า-20220910 (UTF8) อัปเดทล่าสุดถึง 2022-09-19

Git เป็นทางการของ Discuz! X  ([https://gitee.com/Discuz/DiscuzX](https://gitee.com/Discuz/DiscuzX)) เวอร์ชั่นภาษาจีนตัวย่อ UTF8<br />
Git เป็นทางการของ ดิสคัส! ไทย ([https://github.com/jaideejung007/discuzth](https://github.com/jaideejung007/discuzth)) เวอร์ชั่นภาษาไทย UTF8

# คำอธิบาย

ใช้ Google Translate, Baidu翻译, Longdo Dict และ บางส่วนจาก Discuz ThaiTeam

	เพื่อให้เป็นไปตามเงื่อนไขและข้อตกลงการใช้งานของเทนเซนคลาวด์เราจึงขอชี้แจงว่า ผู้แปลไม่มีความเกี่ยวข้องได ๆ กับบริษัทเทนเซนคลาวด์ 
แม้ว่ายูชเชอร์อินเตอร์เฟซนี้จะถูกดัดแปลงอย่างระมัดระวังโดยการเลือกแปลเฉพาะส่วนที่เป็นภาษาจีนเท่านั้น 
แต่ก็ไม่อาจรับประกันความถูกต้องได้ทั้งหมด เราจึงขอปฏิเสทความรับผิดชอบได ๆ ที่อาจเกิดขึ้น 
หากทำให้เกิดความเข้าใจผิด ความผิดพลาด หรือ เกิดความเสียหายต่อทรัพยากรเครือข่ายของคุณ และขอสงวนสิทธิ์ในการให้คำปรึกษาได ๆ เช่นกัน

คำเตือน:
- แอปพลิเคชั่นนี้เป็นแอปพลิเคชั่นดัดแปลงควรใช้งานด้วยความระมัดระวัง ([ละเมิดข้อตกลงข้อ 2.3 ](https://github.com/Nasz/DiscuzX/blob/master/LICENSE) ปัจจุบันดัดแปลงไปแล้วกว่า 250+ ไฟล์)
- ผู้พัฒนาไม่เปิดรับการสะท้อนความเห็นได ๆ เกี่ยวกับการพัฒนาแอปพลิเคชั่นเนื่องจากเป็นเพียงการแปลภาษาเท่านั้น
- หากต้องการใช้งานระยะยาวสามารถมองหาเวอร์ชั่นภาษาไทยที่สมบูรณ์กว่านี้ได้ที่ https://discuzthai.com
- เราไม่รับผิดชอบใด ๆ ในการใช้ซอฟต์แวร์ดีสคัซนี้ หากคุณใช้โปรแกรมนี้บนสภาพแวดล้อมโปรดักชั่น โปรดยอมรับเสี่ยงด้วยตัวเองและปฏิบัติตามข้อตกลงการอนุญาตอย่างเป็นทางการ

*หมายเหตุ: เวอร์ชั่นของเราจะขอใช้ภาษาไทยว่า "ดิสคัซ" (ใช้ ซ.โซ่ แทน ส.เสือ)
# สำหรับการติดตั้งใหม่

- อัปโหลดไฟล์ทั้งหมดในไดเรกทอรี upload ไปยังโฮสติ้งโดยใช้โปรแกรม FTP（โฟลเดอร์ readme และ utility ไม่จำเป็นต้องอัปโหลด<br />
- เปิดคู่มือการติดตั้ง Discuz! X3.5 โดยเข้าไปที่เบราว์เซอร์แล้วพิมพ์ที่อยู่ http://ชื่อโดเมนของคุณ/install/ ดำเนินการติดตั้งทีละขั้นตอนตามคำแนะที่ปรากฏ

การสอนโดยละเอียด:<br />
[https://www.dismall.com/thread-77-1-1.html](https://www.dismall.com/thread-77-1-1.html) (ภาษาจีน)<br />
[https://discuzthai.com/thread-39894-1-1.html](https://discuzthai.com/thread-39894-1-1.html) (ภาษาไทย)

# คำแนะนำในการอัพเกรด

ขณะนี้ยังไม่มีโปรแกรมการอัพเกรด หากคุณต้องการมีส่วนร่วมกับการทดสอบภายใน เข้าไปที่：[https://www.dismall.com/thread-13489-1-1.html](https://www.dismall.com/thread-13489-1-1.html) (ภาษาจีน)

# คำอธิบายแพ็คเกจการติดตั้ง

ประกอบด้วยไฟล์ติดตั้ง Discuz รหัสอักขระแบบ UTF8 จาก GIT อย่างเป็นทางการ ที่อยู่สำหรับโหลดเวอร์ชั่นอย่างเป็นทางการ [https://gitee.com/Discuz/DiscuzX](https://gitee.com/Discuz/DiscuzX)

มองหาเวอร์ชั่นอย่างเป็นทางการรุ่นล่าสุดได้ที่: [https://gitee.com/3dming/DiscuzL/attach_files](https://gitee.com/3dming/DiscuzL/attach_files)<br />
QQกลุ่มแฟนคลับ：[181616145](https://qm.qq.com/cgi-bin/qm/qr?k=fP3Uzw3w7vKgOKDagTQF4KCFytenflXp&jump_from=webapi)(ภาษาจีน)<br />
QQกลุ่มสำรอง(หากกลุ่มบนเต็ม)：15326940(ภาษาจีน)<br />
กลุ่มผู้ใช้งานไทย [LINE Openchat](https://line.me/ti/g2/aQG_0-x6WcphQ4ChUDul9Q)(ภาษาไทย)

## เว็บไซต์ที่เกี่ยวข้อง 
* [ชุมชนอย่างเป็นทางการของ Discuz!](https://www.discuz.net/)(ภาษาจีน)
* [Discuz! แอปเซนเตอร์](https://addon.dismall.com/)(ภาษาจีน)
* [บันทึกการเปลี่ยนแปลง](https://www.dismall.com/thread-77-1-1.html)(ภาษาจีน)
* [ดาวน์โหลดเวอร์ชันล่าสุด Discuz! X3.5](https://gitee.com/3dming/DiscuzL/attach_files)(ภาษาจีน)
* [เรียกใช้บริการ Discuz!](https://addon.dismall.com/service.html)(ภาษาจีน)
* [ชุมชนอย่างเป็นทางการ ดิสคัส!ไทย](https://www.discuzthai.com)
